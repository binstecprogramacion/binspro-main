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
        Schema::create('maintenance_entries', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->string('maintenance')->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->string('frequency')->nullable(false);
            $table->decimal('monthly', 15, 2)->nullable(false);
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
        Schema::dropIfExists('maintenance_entries');
    }
};
