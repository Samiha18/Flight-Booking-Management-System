<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airline;
use App\Models\Flight;


class AirlinesController extends Controller
{
    public function list()
    {
        
        // $Airlines = Airline::all();

        $Flight_no = Airline::with(['Flight_no'])->paginate(5);

        $Airlines_name = Airline::paginate(5);
        
        return view('admin.pages.airlines.list', compact('Flight_no','Airlines_name'));
    }

    public function edit($id){

            $Airlines=Airline::find($id);
            return view('admin.pages.airlines.edit', compact('Airlines'));

        

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
                'Flight_no'=>$request->Flight_no,
             
            ]);
            return redirect()->route('airlines.list');
    }

    public function update(Request $request, $id){
        $request->validate([
            'Airlines_name' => 'required',
            'Flight_no' => 'required',
        ]);

        // old data
        $Airlines = Airline::find($id);

        if( $Airlines){

        $Airlines->update([
            'Airlines_name' => $request->Airlines_name,
            'Flight_no' => $request->Flight_no,
         


            
        ]);
        notify()->success('Airlines updated successfully');
        return to_route('airlines.list');
 }

}
}