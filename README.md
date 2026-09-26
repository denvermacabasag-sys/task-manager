# Personal Task Manager

**Project Code:** WST21-PM-2026-SF
**Student Name:** Comajig, Denver M.
**Course & Year:** BSIT-2 SECTION-5
**Database Used:** MySQL

## Project Overview

Personal Task Manager is a simple Laravel web application designed to help users organize and manage their daily tasks.

The system allows users to create, view, edit, delete, and update the status of their tasks.

## Features

* **Add Task** — Create a new task with a name, description, status, and due date.
* **View Tasks** — Display all saved tasks.
* **Edit Task** — Update existing task information.
* **Delete Task** — Remove tasks from the system.
* **Update Status** — Change a task between Pending and Completed.

### Additional Features

* **Search Tasks** — Quickly find tasks by task name or description.
* **Status Filter** — Filter tasks by All, Pending, or Completed.
* **Task Statistics** — Display the total, pending, and completed task counts.
* **Overdue Highlighting** — Pending tasks with past due dates are highlighted in red.

## Technology Stack

* **Laravel 11** — PHP web application framework
* **PHP 8.5** — Server-side programming language
* **Blade** — Laravel templating engine
* **Eloquent ORM** — Database management through Laravel
* **MySQL 8.4** — Database management system
* **Composer** — PHP dependency manager
* **PHPUnit** — Testing framework
* **HTML & CSS** — Front-end structure and styling
* **JavaScript** — Client-side functionality

## Requirements

Before running the project, make sure the following are installed:

* PHP 8.5 or compatible PHP version
* Composer
* MySQL 8.4 or compatible MySQL version
* Git

## Installation and Setup

### 1. Clone the Repository

```bash
git clone https://github.com/denvermacabasag-sys/task-manager.git
cd task-manager
```

### 2. Install Composer Dependencies

```bash
composer install
```

### 3. Create the Environment File

Copy `.env.example` and rename it to `.env`.

Then generate the Laravel application key:

```bash
php artisan key:generate
```

### 4. Configure the MySQL Database

Create a MySQL database named:

```text
personal_task_manager
```

Then open the `.env` file and configure the database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=personal_task_manager
DB_USERNAME=root
DB_PASSWORD=
```

If your MySQL installation uses a password, enter it in `DB_PASSWORD`.

### 5. Run Database Migrations

Create the required database tables:

```bash
php artisan migrate
```

### 6. Start the Laravel Development Server

```bash
php artisan serve
```

### 7. Open the Application

Open your browser and go to:

```text
http://127.0.0.1:8000
```

## Running Tests

To run the Laravel tests:

```bash
php artisan test
```

## Repository

GitHub Repository:

https://github.com/denvermacabasag-sys/task-manager

## Screenshots
<img width="1917" height="957" alt="image" src="https://github.com/user-attachments/assets/ff09c759-4dd7-4e39-ba3c-6bc68960db53" />
<img width="1917" height="952" alt="image" src="https://github.com/user-attachments/assets/36b4b2ae-a652-434a-b88e-a19de385c766" />
<img width="1917" height="952" alt="image" src="https://github.com/user-attachments/assets/4c02c3f4-9bf8-422b-8085-b4146159f898" />




