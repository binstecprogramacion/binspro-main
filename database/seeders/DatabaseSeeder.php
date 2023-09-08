<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'mariano',
            'email' => 'marianotorres@mailinator.com',
        ]);

        $this->call([
            RoleSeeder::class,
            AccountTypesTableSeeder::class,
            JobPositionsTableSeeder::class,
            IncidentStatusesTableSeeder::class,
            MaintenanceCategoriesTableSeeder::class,
            PrioritiesTableSeeder::class,
            ContingencyTypesTableSeeder::class,

            AccountsTableSeeder::class,
            LocationsTableSeeder::class,
            CollaboratorsTableSeeder::class,
            BudgetsTableSeeder::class,
            PersonalEntriesTableSeeder::class,
            FeesTableSeeder::class,
            MaintenanceEntriesTableSeeder::class,
            ContingenciesTableSeeder::class,
            CostsTableSeeder::class,
            IncidentsTableSeeder::class,
            LogsTableSeeder::class,
        ]);
    }
}
