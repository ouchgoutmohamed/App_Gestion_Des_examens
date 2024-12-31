<?php

namespace App\Models;

class StudentModel extends UserModel
{
    // Ajouter un champ spécifique pour les étudiants
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'CNE', // Nouveau champ pour le Code National de l'Etudiant
    ];

    // Ajouter des règles de validation pour le champ CNE
    protected $validationRules = [
        'first_name' => 'required|min_length[3]|max_length[100]',
        'last_name'  => 'required|min_length[3]|max_length[100]',
        'email'      => 'required|valid_email|max_length[100]',
        'phone'      => 'required|exact_length[10]|numeric',
        'password'   => 'required|min_length[6]|max_length[20]',
        'CNE'        => 'required|alpha_numeric|exact_length[10]', // Validation pour le CNE
    ];

    
}
