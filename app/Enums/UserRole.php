<?php

namespace App\Enums;

enum UserRole: string
{
    case ADMIN = 'admin';
    case INVESTISSEUR = 'investisseur';
    case INDUSTRIEL = 'industriel';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrateur',
            self::INVESTISSEUR => 'Investisseur',
            self::INDUSTRIEL => 'Industriel',
        };
    }
}