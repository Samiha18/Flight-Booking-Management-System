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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('number',20);
           
            $table->string('from_airport');
            $table->string('to_airport');
          

            $table->time('arrival_time');
            $table->time('departure_time');
            $table->string('airlines_name',20);
            $table->double('price');
            $table->string('seats');
            $table->string('travel_class');
          
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
