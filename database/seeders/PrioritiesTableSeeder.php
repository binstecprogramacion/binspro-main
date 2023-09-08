<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $priorities = [
            ['name' => 'Baja', 'description' => 'Incidencia de baja prioridad'],
            ['name' => 'Media', 'description' => 'Incidencia de prioridad media'],
            ['name' => 'Alta', 'description' => 'Incidencia de alta prioridad'],
            ['name' => 'Crítica', 'description' => 'Incidencia de prioridad crítica'],
        ];

        foreach ($priorities as $priority) {
            Priority::firstOrCreate($priority);
        }
    }
}
