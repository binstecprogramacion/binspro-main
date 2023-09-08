<?php

namespace Database\Seeders;

use App\Models\ContingencyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContingencyTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contingencyTypes = [
            ['name' => 'Tipo 1', 'description' => 'Descripción del tipo de contingencia 1'],
            ['name' => 'Tipo 2', 'description' => 'Descripción del tipo de contingencia 2'],
            ['name' => 'Tipo 3', 'description' => 'Descripción del tipo de contingencia 3'],
            ['name' => 'Tipo 4', 'description' => 'Descripción del tipo de contingencia 4'],
            ['name' => 'Tipo 5', 'description' => 'Descripción del tipo de contingencia 5'],
        ];

        foreach ($contingencyTypes as $type) {
            ContingencyType::firstOrCreate($type);
        }
    }
}
