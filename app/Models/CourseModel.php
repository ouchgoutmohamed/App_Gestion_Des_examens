<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'courses'; // Table name
    protected $primaryKey = 'id'; // Primary key
    protected $useAutoIncrement = true; // Auto-increment for the primary key
    protected $returnType = 'array'; // Return data as an array
    protected $useSoftDeletes = false; // Disable soft deletes

    // Fields that can be modified by the model
    protected $allowedFields = [
        'title',
        'professor_id',
    ];   

    // Timestamp configuration
    protected $useTimestamps = true;               // Enable created_at and updated_at columns
    protected $createdField = 'created_at';       // Field for creation date
    protected $updatedField = 'updated_at';       // Field for update date
    protected $deletedField = 'deleted_at';       // Field for soft delete (disabled here)

    public function get_courses(int $professor_id): array
    {
        return $this->select("courses.id, courses.title")
            ->where("professor_id", $professor_id)
            ->findAll();
    }

    public function get_courses_count(int $professor_id):int
    {
        $courses = $this->where("professor_id", $professor_id)->findAll();
        return count($courses);
    }
}