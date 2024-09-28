<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Passenger;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mockery\Generator\StringManipulation\Pass\Pass;

class PassengerController extends Controller
{
    public function list(){

      

        $passengers=Passenger::paginate(5);
        return view ('admin.pages.passenger.list',compact('passengers'));

    }

  //delete
  
    public function delete ($id)
    {
$passengers=Passenger::find($id); 
if ($passengers)
{
    $passengers->delete();
}
   notify()->success('Passenger Deleted Successfilly.');
   return redirect()->back();
    }
        //edit--------

       public function edit($id)
       {

        
        $passengers=Passenger::find($id);
    return view('admin.pages.passenger.edit',compact ('passengers'));
     
       }



       public function passengerUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        // old data
        $passenger = Passenger::find($id);

        $passenger->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact_number' => $request->contact_number,


            
        ]);
        notify()->success('Passenger updated successfully');
        return to_route('passenger.list');
    }



       
    


    public function form(){
        return view ('admin.pages.passenger.form');

    }
    public function store(request $request){
        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'email' =>'required',
            'address' =>'required',
            'contact_number' =>'required',
            
        ]);
        if($validate->fails()){
            return redirect()->back()->withErrors('$validate');
        }
        // dd($request->all());

        Passenger::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'address' =>$request->address,
            'contact_number' =>$request->contact_number,
            
        ]); 
        return redirect()->route('passenger.list');

    }


    }


