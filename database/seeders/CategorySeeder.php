<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Tecnología', 'label' => 'tecnologia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Salud', 'label' => 'salud', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Deportes', 'label' => 'deportes', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Entretenimiento', 'label' => 'entretenimiento', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Negocios', 'label' => 'negocios', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
