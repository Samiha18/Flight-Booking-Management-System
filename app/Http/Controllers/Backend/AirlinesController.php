<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airline;


class AirlinesController extends Controller
{
    public function list()
    {
        
        // $Airlines = Airline::all();


        
        $Airlines = Airline::paginate(5);
        
        return view('admin.pages.airlines.list', compact('Airlines'));
    }



//delete

public function delete ($id)
{
$Airlines=Airline::find($id);
if ($Airlines)
{
    $Airlines->delete();
}
notify()->success('airlines deleted successfully.');
return redirect()->back();
}

//edit------------


    public function form()
    {
        return view('admin.pages.airlines.form');
    }



    public function store(request $request)
    {
        //image handaling
        // $photo = $request->file('image');
        // $fileName = date('Ymdhis') . '.' . $photo->getClientOriginalExtension();
        // echo ($fileName);

        $fileName = null;
        if($request->hasFile ('image')){
        $photo = $request->file ('image');
        $fileName = date('Ymdhis').'.'. $photo->getClientOriginalExtension();
        $photo->storeAs('uploads/', $fileName);
        }

        


            Airline::create([
                'Airlines_name'=>$request->Airlines_name, 
                'Airport_name'=>$request->Airport_name,
             
            ]);
            return redirect()->route('airlines.list');
    }

    
    
}
