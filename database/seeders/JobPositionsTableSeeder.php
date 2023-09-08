<?php

namespace Database\Seeders;

use App\Models\JobPosition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobPositions = [
            ['name' => 'Gerente', 'description' => 'Encargado de supervisar y coordinar las actividades del equipo', 'role_id' => rand(1, 2)],
            ['name' => 'Supervisor', 'description' => 'Encargado de supervisar el trabajo de los empleados', 'role_id' => rand(1, 2)],
            ['name' => 'Técnico', 'description' => 'Encargado de realizar trabajos técnicos y de mantenimiento', 'role_id' => rand(1, 2)],
            ['name' => 'Operador', 'description' => 'Encargado de operar maquinarias y equipos', 'role_id' => rand(1, 2)],
            ['name' => 'Recepcionista', 'description' => 'Encargado de atender a los clientes y visitantes en la recepción', 'role_id' => rand(1, 2)],
        ];

        foreach ($jobPositions as $position) {
            JobPosition::firstOrCreate($position);
        }
    }
}
