<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Seat;

use Illuminate\Http\Request;

class seatController extends Controller
{
    public function list()
    {

        
        $seats=Seat::paginate(6);
        return view ('admin.pages.seat.list',compact ('seats'));
    }
//delete----------------

public function delete ($id)
   {
   $seats=Seat::find($id);
     if ($seats)
  {
    $seats->delete();
  }
notify()->success('Seat deleted successfully.');
return redirect()->back();
}
public function edit($id)
{

 
 $seats=Seat::find($id);
return view('admin.pages.seat.edit',compact ('seats'));

}
public function update(Request $request, $id)
{
    // dd($request->all());
    $request->validate([
        'seat_number' => 'required',
    ]);

    // old data
    $seat = Seat::find($id);

    $seat->update([
    'seat_number'=>$request->seat_number,
    'seat_type'=>$request->seat_type,
    'seat_price'=>$request->seat_price,


        
    ]);
    notify()->success('Seat updated successfully');
    return to_route('seat.list');
}





    
    
    public function form()
    {
        return view ('admin.pages.seat.form');
    }

    public function store(request $request){

            $fileName = null;
            if($request->hasFile ('image')){
                $photo = $request->file ('image');
                $fileName = date('Ymdhis').'.'. $photo->getClientOriginalExtension();
                $photo->storeAs('uploads/', $fileName);
            }

       // dd($request->all());
       Seat::create([
            
            'seat_number'=>$request->seat_number,
           
            'seat_type'=>$request->seat_type,
            'seat_price'=>$request->seat_price,
          
    

       ]);
       return redirect()->route('seat.list');

    }


}
