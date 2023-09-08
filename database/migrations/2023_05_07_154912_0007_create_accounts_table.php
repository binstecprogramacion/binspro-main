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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id()->autoIncrement()->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('RUC', 11)->nullable(false);
            $table->enum('status', ['active', 'inactive'])->nullable(false);
            $table->unsignedBigInteger('account_type_id')->nullable(false);
            $table->timestamp('start_date')->nullable(false);
            $table->timestamp('end_date')->nullable();
            $table->timestamps();

            $table->foreign('account_type_id')->references('id')->on('account_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
