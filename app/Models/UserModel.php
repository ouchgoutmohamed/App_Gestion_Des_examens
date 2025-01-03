<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Table name
    protected $primaryKey = 'id'; // Primary key
    protected $useAutoIncrement = true; // Auto-increment for the primary key
    protected $returnType = 'array'; // Return data as an array
    protected $useSoftDeletes = false; // Disable soft deletes

    // Fields that can be modified by the model
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'cin',
        'cne',
        'code',
        'is_professor'
    ];

    // Timestamp configuration
    protected $useTimestamps = true;               // Enable created_at and updated_at columns
    protected $createdField = 'created_at';       // Field for creation date
    protected $updatedField = 'updated_at';       // Field for update date
    protected $deletedField = 'deleted_at';       // Field for soft delete (disabled here)
}
