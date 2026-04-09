<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@justagrogroup.com'],
            [
                'name' => 'Admin Just Agro Group',
                'password' => 'password',
                'role' => UserRole::ADMIN,
                'email_verified_at' => now(),
            ]
        );
    }
}