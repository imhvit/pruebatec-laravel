<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            ['name' => 'Laptop', 'description' => 'Laptop de alta gama', 'price' => 1500.00, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Smartphone', 'description' => 'Smartphone con cámara de alta resolución', 'price' => 800.00, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bicicleta', 'description' => 'Bicicleta de montaña', 'price' => 500.00, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Camiseta Deportiva', 'description' => 'Camiseta transpirable para deportes', 'price' => 30.00, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Libro de Negocios', 'description' => 'Libro sobre estrategias de negocios', 'price' => 20.00, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
