@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <div class="top-bar">
        <h2 style="margin:0;">My Tasks</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">+ Add Task</a>
    </div>

    <div class="stats">
        <div class="stat-card total">
            <div class="count">{{ $totalTasks }}</div>
            <div class="label">Total Tasks</div>
        </div>
        <div class="stat-card pending">
            <div class="count">{{ $pendingTasks }}</div>
            <div class="label">Pending</div>
        </div>
        <div class="stat-card completed">
            <div class="count">{{ $completedTasks }}</div>
            <div class="label">Completed</div>
        </div>
    </div>

    <div class="filter-bar">
        <form method="GET" action="{{ route('tasks.index') }}" style="display:flex; gap:10px; width:100%;">
            <input type="text" name="search" placeholder="Search tasks..." value="{{ request('search') }}">
            <input type="hidden" name="status" value="{{ request('status', 'all') }}">
            <button type="submit" class="btn btn-sm" style="background:#e9ecef;">Search</button>
        </form>
        <div style="display:flex; gap:6px;">
            <a href="{{ route('tasks.index', ['search' => request('search')]) }}" class="filter-btn {{ !request('status') || request('status') === 'all' ? 'active' : '' }}">All</a>
            <a href="{{ route('tasks.index', ['search' => request('search'), 'status' => 'Pending']) }}" class="filter-btn {{ request('status') === 'Pending' ? 'active' : '' }}">Pending</a>
            <a href="{{ route('tasks.index', ['search' => request('search'), 'status' => 'Completed']) }}" class="filter-btn {{ request('status') === 'Completed' ? 'active' : '' }}">Completed</a>
        </div>
    </div>

    @if ($tasks->isEmpty())
        <div class="empty">
            <p>No tasks found. Click "Add Task" to create your first one.</p>
        </div>
    @else
        <table>
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    @php
                        $overdue = $task->due_date && $task->due_date->isPast() && $task->status === 'Pending';
                    @endphp
                    <tr class="{{ $overdue ? 'overdue' : '' }}">
                        <td>{{ $task->task_name }}</td>
                        <td>{{ Str::limit($task->description, 60) ?: '—' }}</td>
                        <td>{{ $task->due_date ? $task->due_date->format('M d, Y') : '—' }}</td>
                        <td>
                            <span class="badge {{ $task->status === 'Completed' ? 'badge-completed' : 'badge-pending' }}">
                                {{ $task->status }}
                            </span>
                        </td>
                        <td>
                            <div class="actions">
                                <form action="{{ route('tasks.updateStatus', $task) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success btn-sm">
                                        Mark {{ $task->status === 'Pending' ? 'Completed' : 'Pending' }}
                                    </button>
                                </form>

                                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                      onsubmit="return confirm('Delete this task?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
