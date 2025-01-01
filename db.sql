CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cin VARCHAR(20) UNIQUE NOT NULL,
    cne VARCHAR(20) UNIQUE DEFAULT NULL,
    code VARCHAR(20) UNIQUE DEFAULT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(15),
    is_professor BOOLEAN NOT NULL DEFAULT false
);

CREATE TABLE courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    professor_id INT NOT NULL,
    FOREIGN KEY (professor_id) REFERENCES users(id)
);

CREATE TABLE students_courses (
    student_id INT NOT NULL,
    course_id INT NOT NULL,
    grade DECIMAL(5, 2),
    semester VARCHAR(20) NOT NULL,
    date DATE NOT NULL DEFAULT (CURRENT_DATE),
    PRIMARY KEY (student_id, course_id),
    UNIQUE KEY unique_student_course (student_id, course_id), -- Unique constraint
    FOREIGN KEY (student_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE ON UPDATE CASCADE
);