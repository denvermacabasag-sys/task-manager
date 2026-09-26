<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Personal Task Manager')</title>
    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            color: #2d3436;
        }
        header {
            background: #2d3748;
            color: #fff;
            padding: 20px 30px;
        }
        header h1 { margin: 0; font-size: 22px; }
        header p { margin: 4px 0 0; color: #cbd5e0; font-size: 13px; }
        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            padding: 25px;
        }
        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }
        .btn-primary { background: #4c6ef5; color: #fff; }
        .btn-primary:hover { background: #3b5bdb; }
        .btn-success { background: #37b24d; color: #fff; }
        .btn-success:hover { background: #2f9e44; }
        .btn-warning { background: #f59f00; color: #fff; }
        .btn-warning:hover { background: #e08e00; }
        .btn-danger { background: #e03131; color: #fff; }
        .btn-danger:hover { background: #c92a2a; }
        .btn-sm { padding: 5px 10px; font-size: 12px; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            text-align: left;
            padding: 12px 10px;
            border-bottom: 1px solid #edf2f7;
            font-size: 14px;
            vertical-align: top;
        }
        th { background: #f8f9fa; font-weight: 600; }
        .badge {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .badge-pending { background: #fff3bf; color: #856404; }
        .badge-completed { background: #d3f9d8; color: #2b8a3e; }
        .actions form { display: inline; }
        .actions { display: flex; gap: 6px; flex-wrap: wrap; }
        .alert {
            padding: 12px 16px;
            background: #d3f9d8;
            color: #2b8a3e;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .form-group { margin-bottom: 18px; }
        label { display: block; margin-bottom: 6px; font-weight: 600; font-size: 14px; }
        input[type=text], textarea, select, input[type=date] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
        }
        .error { color: #e03131; font-size: 13px; margin-top: 4px; }
        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .stats {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .stat-card {
            flex: 1;
            padding: 15px 20px;
            border-radius: 8px;
            text-align: center;
        }
        .stat-card.total { background: #e7f5ff; color: #1864ab; }
        .stat-card.pending { background: #fff3bf; color: #856404; }
        .stat-card.completed { background: #d3f9d8; color: #2b8a3e; }
        .stat-card .count { font-size: 28px; font-weight: 700; }
        .stat-card .label { font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
        .filter-bar {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            align-items: center;
        }
        .filter-bar input[type="text"] {
            flex: 1;
            padding: 8px 14px;
            font-size: 14px;
            border: 1px solid #dee2e6;
            border-radius: 6px;
        }
        .filter-btn {
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 13px;
            border: 1px solid transparent;
            cursor: pointer;
            background: #e9ecef;
            color: #495057;
        }
        .filter-btn:hover { background: #dee2e6; }
        .filter-btn.active {
            background: #4c6ef5;
            color: #fff;
            border-color: #4c6ef5;
        }
        .overdue td { background: #fff5f5; }
        .empty {
            text-align: center;
            padding: 40px 0;
            color: #868e96;
        }
    </style>
</head>
<body>
    <header>
        <h1>📋 Personal Task Manager</h1>
        <p>Laravel Mini Project — WST21-PM-2026-SF</p>
    </header>

    <div class="container">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <div class="card">
            @yield('content')
        </div>
    </div>
</body>
</html>
