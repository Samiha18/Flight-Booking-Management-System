@extends('admin.master')
@section('content')

<form action="{{route('flightslist.store')}}" method='post' enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="number"> Flight_no</label>
  
  <select class="form-control border-1 outline-rectangle" name="Flight_no">
                        @foreach($Airlines_name as $Flight_no)
                            <option value="{{$Flight_no->Flight_no}}">{{$Flight_no->Flight_no}}</option>
                        @endforeach
                    </select>




</div>

  <div class="form-group">
  <label for="exampleInputlocation1">From Airport</label>
  <select class="form-control border-1 outline-rectangle" name="from">
                        @foreach($airports as $from)
                            <option value="{{$from->from_airport}}">{{$from->from_airport}}</option>
                        @endforeach
                    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputlocation1">To Airport</label>
    <select class="form-control border-1 outline-rectangle" name="to">
                        @foreach($airports as $from)
                            <option value="{{$from->to_airport}}">{{$from->to_airport}}</option>
                        @endforeach
                    </select>
  
    </div>

    <div class="form-group">
    <label for="departure time">Departure time</label>
    <input type="time" name="departure_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter departure time">
</div>


  
  <div class="form-group">
    <label for="arrival time">Arrival time</label>
    <input type="time" name="arrival_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter arrival time">
</div>

<div class="form-group">
    <label for="exampleInputlocation1">Airline_name </label>

    <select class="form-control border-1 outline-rectangle" name="airlines_name">
                        @foreach($Airlines_name as $airlines_name)
                            <option value="{{$airlines_name->Airlines_name}}">{{$airlines_name->Airlines_name}}</option>
                        @endforeach
                    </select>
   
    </div>

<div class="form-group">
    <label for="number"> Price</label>
    <input type="string"name="price" class="form-control" id="number" placeholder="Enter price">
</div>

<!-- <div class="form-group">
    <label for="number"> Seats</label>
    <input type="string"name="seats" class="form-control" id="number" placeholder="Enter seats">
</div> -->


<div class="form-group">
    <label for="exampleInputlocation1">Travel_class</label>

    <select name="travel_class" id="" class="form-control">
    
    
    <option value="travel_class" hidden selected></option>
                <option value="Economy">Economy</option>

                <!-- <option value="Premium">Premium</option> -->
                <option value="Business">Business</option>
    
   </select>
    </div>
    




  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection