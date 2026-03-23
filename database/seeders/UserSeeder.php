<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                "name" => "Adminstrador atende já",
                "email" => "admin@atendeja.com",
                "password" => "password",
                "role" => "admin"
            ]
        ];


        foreach ($usuarios as $usuario) {
            if (User::where('email', $usuario['email'])->exists()) {
                continue; // Pula para o próximo usuário se o email já existir
            }
            User::firstOrCreate($usuario);
        }
    }
}
