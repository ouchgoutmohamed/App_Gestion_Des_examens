<?php

namespace App\Enums;

enum Reclamations: string
{
    case EN_COURS = 'en cours';
    case ACCEPTEE = 'acceptée';
    case REJETÉE = 'rejetée';
}