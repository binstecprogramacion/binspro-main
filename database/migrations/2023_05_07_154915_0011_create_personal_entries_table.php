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
        Schema::create('personal_entries', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->unsignedBigInteger('job_position_id')->nullable(false);
            $table->decimal('monthly', 15, 2)->nullable(false);
            $table->unsignedBigInteger('budget_id')->nullable(false);
            $table->timestamps();

            $table->foreign('job_position_id')->references('id')->on('job_positions');
            $table->foreign('budget_id')->references('id')->on('budgets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_entries');
    }
};
