# PHP CRUD Student Registration

This project is a simple web application developed in PHP that performs CRUD (Create, Read, Update, Delete) operations for student registration.

## Features

- **Create:** Add new student records to the database.
- **Read:** View and display student information.
- **Update:** Edit and modify existing student records.
- **Delete:** Remove student records from the database.

## Prerequisites

Before running the project, ensure you have the following:

- PHP installed on your server
- MySQL database for storing student records

## Getting Started

1. Clone the repository:

   ```bash
   git clone https://github.com/zoelabbb/crud-student-register.git
   ```

2. No need Import Database, because `config.php` will make Database automation.

3. Start your PHP server:

   ```bash
   php -S localhost:8000
   ```

4. Open the application in your web browser: [http://localhost:8000](http://localhost:8000)

## Database Structure

The project assumes a basic database structure with a `students` table. Make sure to adjust the structure based on your requirements.

```sql
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    date_of_birth DATE
);
```

## Contributing

If you'd like to contribute to this project, follow these steps:

1. Fork the repository.
2. Create a new branch: `git checkout -b new-feature`.
3. Commit your changes: `git commit -m 'Add new feature'`.
4. Push to the branch: `git push origin new-feature`.
5. Submit a pull request.
