<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

//use HasFactory;
    // protected $fillable=[
    //     'airport_code','airport_name','location','terminal','service_available','runway','gateway'
    // ];
    protected $guarded =[];
}
