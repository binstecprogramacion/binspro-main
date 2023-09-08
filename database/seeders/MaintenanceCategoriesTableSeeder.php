<?php

namespace Database\Seeders;

use App\Models\MaintenanceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $maintenanceCategories = [
            ['name' => 'Categoría 1', 'description' => 'Descripción de la categoría 1'],
            ['name' => 'Categoría 2', 'description' => 'Descripción de la categoría 2'],
            ['name' => 'Categoría 3', 'description' => 'Descripción de la categoría 3'],
            ['name' => 'Categoría 4', 'description' => 'Descripción de la categoría 4'],
            ['name' => 'Categoría 5', 'description' => 'Descripción de la categoría 5'],
            ['name' => 'Categoría 6', 'description' => 'Descripción de la categoría 6'],
        ];

        foreach ($maintenanceCategories as $category) {
            MaintenanceCategory::firstOrCreate($category);
        }
    }
}
