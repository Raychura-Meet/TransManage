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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('image');
            $table->string('puc');
            $table->string('Insurance');
            $table->string('Total_km')->default('0');
            $table->string('Model');
            $table->string('Number_Plate')->unique();
            $table->string('Insurance_no')->unique();
            $table->date('P_Date');
            $table->date('I_Date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
