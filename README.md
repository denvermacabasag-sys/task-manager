# Personal Task Manager

Project Code: WST21-PM-2026-SF
Student Name: Comajig, Denver M.
Course & Year: BSIT-2 SECTION-5
Database Used: SQLite

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status (Pending / Completed)

### Additional Features
- **Search Tasks** — quickly find tasks by name or description
- **Status Filter** — filter tasks by All, Pending, or Completed status
- **Task Statistics** — cards showing total, pending, and completed task counts
- **Overdue Highlighting** — tasks with a past due date (still pending) are highlighted in red

## Tech Stack
- Laravel 11 (PHP framework)
- Blade templating engine
- Eloquent ORM
- SQLite database
- PHPUnit for testing

## Setup Instructions

1. Clone this repository:
   ```
   git clone <your-repo-url>
   cd task-manager
   ```

2. Install Composer dependencies:
   ```
   composer install
   ```

3. Copy the environment file and generate an app key:
   ```
   cp .env.example .env
   php artisan key:generate
   ```

4. Configure your database in `.env`:

5. Run the migrations to create the `tasks` table (and default Laravel tables):
   ```
   php artisan migrate
   ```

6. Serve the application:
   ```
   php artisan serve
   ```

7. Open the app in your browser:
   ```
   http://127.0.0.1:8000
   ```

### Running Tests
```
php artisan test
```

## Screenshots
<img width="1917" height="957" alt="image" src="https://github.com/user-attachments/assets/ff09c759-4dd7-4e39-ba3c-6bc68960db53" />
<img width="1917" height="952" alt="image" src="https://github.com/user-attachments/assets/36b4b2ae-a652-434a-b88e-a19de385c766" />
<img width="1917" height="952" alt="image" src="https://github.com/user-attachments/assets/4c02c3f4-9bf8-422b-8085-b4146159f898" />




