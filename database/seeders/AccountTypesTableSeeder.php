<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accountTypes = [
            ['name' => 'Facility', 'description' => 'Áreas comunes'],
            ['name' => 'Property', 'description' => 'Cliente final'],
        ];

        foreach ($accountTypes as $type) {
            AccountType::firstOrCreate($type);
        }
    }
}
