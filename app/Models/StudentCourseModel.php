<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentCourseModel extends Model
{
    protected $table = 'students_courses';
    protected $primaryKey = ['student_id', 'course_id'];

    // Les champs qui peuvent être insérés ou mis à jour dans la table
    protected $allowedFields = [
        'student_id',
        'course_id',
        'grade',
        'semester',
        'date'
    ];

    // Utiliser SoftDeletes si nécessaire
    protected $useSoftDeletes = true;

    // Spécifier les dates (automatiques pour 'created_at', 'updated_at', et 'deleted_at')
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Méthode pour obtenir tous les cours d'un étudiant
    public function getStudentsByCourse($course_id)
    {
        return $this->select('students_courses.student_id, students_courses.grade, users.first_name, users.last_name, users.email, users.cne, courses.title')
            ->join('users', 'users.id = students_courses.student_id')
            ->join('courses', 'courses.id = students_courses.course_id') // Join with courses table
            ->where('students_courses.course_id', $course_id) // Ensure students_courses table is scoped
            ->get()
            ->getResultArray();
    }

    public function updateGrade($student_id, $course_id, $grade)
    {
        $this->db->table($this->table) // Ensure you're targeting the correct table
            ->set("grade", $grade) // Set the new grade
            ->where('student_id', $student_id) // Add condition for student ID
            ->where('course_id', $course_id) // Add condition for course ID
            ->update(); // Execute the update query
    }
}