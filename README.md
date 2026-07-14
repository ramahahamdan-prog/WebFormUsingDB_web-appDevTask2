# WebFormUsingDB_web-appDevTask2
This project is to understand the form filling in websites, and to achive the PHP funcutions.

A simple web application developed using **PHP**, **MySQL**, **HTML**, and **CSS**. The project allows users to add student records, display them in a table, and update each student's status by toggling between active and inactive.

## Project Overview

This project demonstrates the basic concepts of web development using PHP and MySQL. It connects a web interface to a MySQL database, allowing users to insert new student records and manage their status through a simple and user-friendly interface.

## Features

- Add new students by entering their name and age
- Store student information in a MySQL database
- Display all student records in a table
- Toggle student status between **0** (Inactive) and **1** (Active)
- Automatically refresh the page after adding or updating a record
- Responsive and simple user interface

## Project Structure

```
Student-Status-System/
│
├── index.php          # Main page containing the form and students table
├── config.php         # Database connection
├── insert.php         # Inserts new student records into the database
├── toggle.php         # Updates the student's status
├── style.css          # Website styling
├── database.sql       # Database table structure
└── README.md          # Project documentation
```

## How the Project Works

1. The user enters the student's name and age.
2. The form sends the data to the PHP backend.
3. PHP stores the information in the MySQL database.
4. All student records are displayed in a table.
5. Clicking the **Toggle** button changes the student's status between **0** and **1**.
6. The page reloads automatically to display the updated information.

## Technologies Used

- HTML
- CSS
- PHP
- MySQL
- phpMyAdmin

## How to Run

### 1. Create the Database

Create a MySQL database and import the `database.sql` file.

### 2. Configure the Database Connection

Open `config.php` and update the following information:

- Database Host
- Database Name
- Username
- Password

### 3. Upload the Project

Upload all project files to your web server (such as InfinityFree).

### 4. Open the Website

Open the project URL in your browser.

## Example

### Add Student

```
Name: Ahmed
Age: 20
```

After clicking **Submit**, the student is added to the database.

### Student Table

| ID | Name | Age | Status |
|----|------|-----|--------|
| 1 | Ahmed | 20 | 0 |
| 2 | Sara | 22 | 1 |

Clicking the **Toggle** button changes the student's status between **0** and **1**.

## Files Description

| File | Description |
|------|-------------|
| index.php | Displays the form and student records |
| config.php | Connects the application to the MySQL database |
| insert.php | Inserts new student data into the database |
| toggle.php | Updates the student's status |
| style.css | Styles the web page |
| database.sql | Creates the students table |
| README.md | Project documentation |

## Conclusion

This project provides a simple implementation of a student management system using PHP and MySQL. It demonstrates how to connect a web application to a database, insert and retrieve data, and update records dynamically. The project is suitable for beginners who want to learn the fundamentals of PHP, MySQL, and basic web development.
