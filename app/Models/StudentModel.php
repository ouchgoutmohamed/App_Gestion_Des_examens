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

    protected $validationMessages = [
        'first_name' => [
            'required'   => 'Le prénom est obligatoire.',
            'min_length' => 'Le prénom doit comporter au moins 3 caractères.',
            'max_length' => 'Le prénom ne peut pas dépasser 100 caractères.',
        ],
        'last_name' => [
            'required'   => 'Le nom de famille est obligatoire.',
            'min_length' => 'Le nom de famille doit comporter au moins 3 caractères.',
            'max_length' => 'Le nom de famille ne peut pas dépasser 100 caractères.',
        ],
        'email' => [
            'required'    => 'L\'adresse e-mail est obligatoire.',
            'valid_email' => 'Veuillez fournir une adresse e-mail valide.',
            'max_length'  => 'L\'adresse e-mail ne peut pas dépasser 100 caractères.',
        ],
        'phone' => [
            'required'     => 'Le numéro de téléphone est obligatoire.',
            'exact_length' => 'Le numéro de téléphone doit comporter exactement 10 chiffres.',
            'numeric'      => 'Le numéro de téléphone doit contenir uniquement des chiffres.',
        ],
        'password' => [
            'required'   => 'Le mot de passe est obligatoire.',
            'min_length' => 'Le mot de passe doit comporter au moins 6 caractères.',
            'max_length' => 'Le mot de passe ne peut pas dépasser 20 caractères.',
        ],
        'CNE' => [
            'required'      => 'Le CNE est obligatoire.',
            'alpha_numeric' => 'Le CNE doit contenir uniquement des lettres et des chiffres.',
            'exact_length'  => 'Le CNE doit comporter exactement 10 caractères.',
        ],
    ];
}
