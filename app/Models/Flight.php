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

    public function Airlines_name()
    {
        return $this->belongsTo(Airline::class, 'Airlines_name');
    }
    

    public function Flight_no()
    {
        return $this->belongsTo(Airline::class,'Flight_no'); 
    }
    public function baggage()
    {
        return $this->belongsTo(Baggage::class,'baggage_id', 'id'); 
    }


}
