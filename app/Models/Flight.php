<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
   
    protected $guarded=[];

    public function fromAirport()
    {
        return $this->belongsTo(Airport::class,'from_airport'); 
    }

    public function toAirport()
    {
        return $this->belongsTo(Airport::class,'to_airport'); 
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class, 'airlines_name');
    }
    

}
