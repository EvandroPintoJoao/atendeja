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
                "name" => "Emauel Benjamim Pinto Coelho",
                "email" => "emanuel@email.com",
                "password" => "1234" 
            ],
            [
                "name" => "Cheila Benjamim Pinto Coelho",
                "email" => "cheila@email.com",
                "password" => "1234" 
            ],
            [
                "name" => "Mateus Benjamim Pinto Coelho",
                "email" => "mateus@email.com",
                "password" => "1234" 
            ],
            [
                "name" => "Araújo Benjamim Pinto Coelho",
                "email" => "araujo@email.com",
                "password" => "1234" 
            ]
        ];


     foreach ($usuarios as $usuario) {
        User::firstOrCreate($usuario);
     }
    }
}
