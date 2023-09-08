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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('location');
            $table->unsignedBigInteger('maintenance_category_id')->nullable(false);
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('status_id')->nullable(false);
            $table->unsignedBigInteger('location_id')->nullable(false);
            $table->unsignedBigInteger('service_desk_id')->nullable(false);
            $table->unsignedBigInteger('technical_id')->nullable(false);
            $table->timestamp('start_date')->nullable(false);
            $table->timestamp('end_date')->nullable();
            $table->timestamps();

            $table->foreign('maintenance_category_id')->references('id')->on('maintenance_categories');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('status_id')->references('id')->on('incident_statuses');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->foreign('service_desk_id')->references('id')->on('collaborators');
            $table->foreign('technical_id')->references('id')->on('collaborators');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
