<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';         // Nom de la table
    protected $primaryKey       = 'id';            // Clé primaire
    protected $useAutoIncrement = true;            // Auto-incrémentation pour la clé primaire
    protected $returnType       = 'array';         // Retourner les données sous forme de tableau
    protected $useSoftDeletes   = false;           // Désactiver les suppressions logiques

    // Champs modifiables par le modèle
    protected $allowedFields    = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password'
    ];

    // Configuration des timestamps
    protected $useTimestamps = true;               // Activer les colonnes created_at et updated_at
    protected $createdField  = 'created_at';       // Champ pour la date de création
    protected $updatedField  = 'updated_at';       // Champ pour la date de mise à jour
    protected $deletedField  = 'deleted_at';       // Champ pour la suppression logique (désactivé ici)

    // Règles de validation
    protected $validationRules = [
        'first_name' => 'required|min_length[3]|max_length[100]',
        'last_name'  => 'required|min_length[3]|max_length[100]',
        'email'      => 'required|valid_email|max_length[100]',
        'phone'      => 'required|exact_length[10]|numeric',
        'password'   => 'required|min_length[6]|max_length[20]',
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
    ];

    protected $skipValidation = false;             // Validation activée
}
