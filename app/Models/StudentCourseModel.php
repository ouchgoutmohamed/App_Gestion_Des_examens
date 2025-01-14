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
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Méthode pour obtenir tous les cours d'un étudiant
    public function getStudentsByCourse($course_id)
    {
        return $this->select('students_courses.student_id, students_courses.grade, users.first_name, users.last_name, users.cne')
            ->join("users", "users.id = students_courses.student_id")
            ->where('course_id', $course_id)
            ->get()
            ->getResultArray();
    }
}