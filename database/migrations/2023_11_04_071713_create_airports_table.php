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
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
         
            $table->text('from_airport')->nullable();
            $table->text('from_place')->nullable();
            $table->text('to_airport')->nullable();
            $table->text('to_place')->nullable();
            $table->text('terminal')->nullable();
            // $table->text('service_available');
           
            $table->text('gateway');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
