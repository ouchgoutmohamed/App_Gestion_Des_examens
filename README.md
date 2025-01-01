# Exam Management Application

README in: [French](README-FR.md), [English](README.md)

## Description
An exam management application with features allowing:
- Teachers to input and edit grades.
- Students to manage complaints.
- Students to view their results.

## Features
1. **Grade Input**  
   Teachers can add and modify student grades for each course.
   
2. **View Grades**  
   Students can view their grades.

3. **View Results**  
   Students can view their results and their average.

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript, Tailwind CSS.
- **Backend**: PHP, CodeIgniter.
- **Database**: MySQL.

## Steps to Set Up the Project

1. **Clone the project:**
   ```bash
   git clone https://github.com/ouchgoutmohamed/App_Gestion_Des_examens.git
   ```

2. **Install backend dependencies with Composer:**
   ```bash
   composer install
   ```

3. **Install frontend dependencies (including Tailwind CSS):**
   ```bash
   npm install
   ```

4. **Activate MySQL and configure the database:**

   - **Create the database:**
     - Option 1: Run the following command to create the `gestion_exams` database:
       ```bash
       php spark create:db gestion_exams
       ```
     - Option 2: Create it manually using software like phpMyAdmin or MySQL Workbench.

   - **Create the tables:**
     - Option 1: Run the following command to execute migrations:
       ```bash
       php spark migrate
       ```
     - Option 2: Import the `db.sql` file included in the project.

5. **Populate the database:**
   - Run the following command to insert initial data:
     ```bash
     php spark db:seed MainSeeder
     ```

6. **Start the web server:**
   ```bash
   php spark serve
   ```

## Contribution
To contribute:
1. Fork the project.
2. Create a new branch:
   ```bash
   git checkout -b new-feature
   ```
3. Make your changes and test them.
4. Submit a pull request.

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). You are free to use and modify it.