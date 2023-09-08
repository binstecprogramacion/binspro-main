<?php

namespace Database\Seeders;

use App\Models\IncidentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidentStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incidentStatuses = [
            ['name' => 'Abierto', 'description' => 'Incidencia abierta y pendiente de atención'],
            ['name' => 'En proceso', 'description' => 'Incidencia en proceso de resolución'],
            ['name' => 'Resuelto', 'description' => 'Incidencia resuelta'],
            ['name' => 'Cerrado', 'description' => 'Incidencia cerrada'],
        ];

        foreach ($incidentStatuses as $status) {
            IncidentStatus::firstOrCreate($status);
        }
    }
}
