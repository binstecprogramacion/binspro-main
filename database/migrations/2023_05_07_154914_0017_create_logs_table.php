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
        Schema::create('logs', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->text('comments')->nullable(false);
            $table->unsignedBigInteger('incident_id')->nullable(false);
            $table->unsignedBigInteger('collaborator_id')->nullable(false);
            $table->timestamps();

            $table->foreign('incident_id')->references('id')->on('incidents');
            $table->foreign('collaborator_id')->references('id')->on('collaborators');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
