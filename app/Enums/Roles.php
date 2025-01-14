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

    public static function fromId(int $id): ?self
    {
        return match ($id) {
            1 => self::ADMIN,
            2 => self::PROFESSOR,
            3 => self::STUDENT,
            default => null, // Return null if the ID does not match any role
        };
    }
}
