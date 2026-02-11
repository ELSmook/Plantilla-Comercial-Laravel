<?php

namespace Database\Seeders;




// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    $this->call(Rolseeder::class);
    $this->call(UserSeeder2::class); 
    $this->call(CategoriaSeeder::class);
    $this->call(SeccionesSeeder::class);
    Producto::factory(20)->create();
    }
}

