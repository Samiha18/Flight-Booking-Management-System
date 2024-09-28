<?php
 use Illuminate\Contracts\Container\BindingResolutionException; 
use Illuminate\Database\Seeder;
use App\Models\Airport;

class AirportsTableSeeder extends Seeder
{
    public function run()
    {
        Airport::create([
            'name' => 'John F. Kennedy International Airport',
            'code' => 'JFK',
            'city' => 'New York',
            'country' => 'USA'
        ]);

        Airport::create([
            'name' => 'Heathrow Airport',
            'code' => 'LHR',
            'city' => 'London',
            'country' => 'UK'
        ]);

        // Add more airports here
    }
}


