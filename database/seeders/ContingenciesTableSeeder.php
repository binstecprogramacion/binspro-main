<?php

namespace Database\Seeders;

use App\Models\Contingency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContingenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contingencies = [
            ['contingency_type_id' => 1, 'amount' => 100.00, 'cash_box' => 50.00, 'maintenance_entry_id' => 1],
            ['contingency_type_id' => 2, 'amount' => 200.00, 'cash_box' => 100.00, 'maintenance_entry_id' => 2],
            ['contingency_type_id' => 3, 'amount' => 300.00, 'cash_box' => 150.00, 'maintenance_entry_id' => 3],
            ['contingency_type_id' => 4, 'amount' => 400.00, 'cash_box' => 200.00, 'maintenance_entry_id' => 4],
            ['contingency_type_id' => 5, 'amount' => 500.00, 'cash_box' => 250.00, 'maintenance_entry_id' => 5],
            ['contingency_type_id' => 1, 'amount' => 600.00, 'cash_box' => 300.00, 'maintenance_entry_id' => 1],
        ];


        foreach ($contingencies as $contingency) {
            Contingency::create($contingency);
        }
    }
}
