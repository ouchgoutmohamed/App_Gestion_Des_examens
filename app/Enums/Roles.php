<?php

namespace App\Enums;


enum Roles: string
{
    case STUDENT = 'STUDENT';
    case PROFESSOR = 'PROFESSOR';
    case ADMIN = 'ADMIN';

    public function getId(): int
    {
        return match ($this) {
            self::ADMIN => 1,
            self::PROFESSOR => 2,
            self::STUDENT => 3,
        };
    }
}
