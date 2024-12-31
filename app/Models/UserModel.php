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
        'password',
        'cin',
        'cne',
        'code',
        'is_professor'
    ];

    // Configuration des timestamps
    protected $useTimestamps = true;               // Activer les colonnes created_at et updated_at
    protected $createdField  = 'created_at';       // Champ pour la date de création
    protected $updatedField  = 'updated_at';       // Champ pour la date de mise à jour
    protected $deletedField  = 'deleted_at';       // Champ pour la suppression logique (désactivé ici)

    
}
