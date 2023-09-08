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
        Schema::create('contingencies', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->unsignedBigInteger('contingency_type_id')->nullable(false);
            $table->decimal('amount', 15, 2)->nullable(false);
            $table->decimal('cash_box', 15, 2)->nullable(false);
            $table->unsignedBigInteger('maintenance_entry_id')->nullable(false);
            $table->timestamps();

            $table->foreign('contingency_type_id')->references('id')->on('contingency_types');
            $table->foreign('maintenance_entry_id')->references('id')->on('maintenance_entries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contingencies');
    }
};
