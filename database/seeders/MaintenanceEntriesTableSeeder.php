<?php

namespace Database\Seeders;

use App\Models\MaintenanceEntry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceEntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaintenanceEntry::factory()->count(10)->create();
    }
}
