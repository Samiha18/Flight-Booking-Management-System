<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function Flight_no()
    {
        return $this->belongsTo(Flight::class,'Flight_no'); 
    }


    // public function currentPage()
    // {
    //     return $this->belongsTo(Airline::class,'currentPage'); 
    // }

   
}
