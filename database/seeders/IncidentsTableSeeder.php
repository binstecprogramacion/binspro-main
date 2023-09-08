<?php

namespace Database\Seeders;

use App\Models\Incident;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Incident::factory()->count(100)->create();
    }
}
