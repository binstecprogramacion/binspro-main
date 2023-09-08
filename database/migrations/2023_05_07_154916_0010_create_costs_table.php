<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->decimal('operational_costs', 15, 2)->nullable(false);
            $table->decimal('indirect_expenses', 15, 2)->nullable(false);
            $table->unsignedBigInteger('budget_id')->nullable(false);
            $table->timestamps();

            $table->foreign('budget_id')->references('id')->on('budgets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('costs');
    }
};

/* 
create_account_types_table --create=account_types
create_maintenance_categories_table --create=maintenance_categories
create_incident_statuses_table --create=incident_statuses
create_priorities_table --create=priorities
create_job_positions_table --create=job_positions
create_contingency_types_table --create=contingency_types
create_accounts_table --create=accounts
create_locations_table --create=locations
create_budgets_table --create=budgets
create_costs_table --create=costs
create_personal_entries_table --create=personal_entries
create_fees_table --create=fees

create_maintenance_entries_table --create=maintenance_entries
create_contingencies_table --create=contingencies
create_collaborators_table --create=collaborators
create_incidents_table --create=incidents
create_logs_table --create=logs

*/