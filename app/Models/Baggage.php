<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baggage extends Model
{
    use HasFactory;


    protected $guarded =[];

    public function flight()
    {
        return $this->hasOne(Flight::class, 'baggages_id'); 
    }



}
