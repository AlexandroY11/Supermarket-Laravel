<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Producto::factory(50)->create();

        $usuario = new Usuario();

        $usuario->nombre_usuario = 'admin';
        $usuario->email_usuario = 'admin@gmail.com';
        $usuario->password_usuario = '12345';

        $usuario->save();

        Usuario::factory(50)->create();
    }
}
