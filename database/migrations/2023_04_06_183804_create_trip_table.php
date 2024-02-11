<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trip', function (Blueprint $table) {
            $table->id();
            $table->string('Model');
            $table->string('Route');
            $table->string('Driver');
            $table->string('customer');
            $table->string('Mileage');
            $table->string('Status');
            $table->string('From');
            $table->string('To');
            $table->string('Cash');
            $table->string('Spent')->default('0');
            $table->string('FE')->default('0');
            $table->string('RE')->default('0');
            $table->string('OE')->default('0');
            $table->string('T_S')->default('Ongoing');
            $table->date('F_Date');
            $table->date('T_Date');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('trip');
    }
};
