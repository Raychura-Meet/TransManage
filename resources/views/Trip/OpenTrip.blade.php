

<html>
    <head>
    <title> Open Trip </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
@extends('layouts.main')

@section('title')
    Settings
@endsection

@section('content')
    <div class ="py-3">
        <div class ="container">
            <div class ="h4">Trips</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Generate Trip</div> 
            <div>
               <a href="{{ route('Trip.OnGoing') }}"  class="btn btn-primary" >Ongoing Trip</a>
            </div>
        </div>
    </div>

    <form action="{{ route('Trip.store') }}" method="post" >
        @csrf

    <div class="card border-0 shadow-ig">
        <div class="container">
        <div class="row">

        <div class="col"><br>
        <label for="Model" >Select Vehicle:</label><br>
        <select class="form-control" name="Model">
            <option value="Select Vehicle">Select Vehicle</option>
                @foreach($vehicle as $vehicle)
                    <option value="{{ $vehicle->Model }}">{{$vehicle->Model}}</option>
                @endforeach
        </select><br>  
        </div><br>

         <div class="col"><br>
            <label for="Cash" >Cash Given</label>
            <input  type="text"  Name="Cash" id="Cash" placeholder="Enter Cash Given" class="form-control
            @error('Number') is-invalid @enderror">
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div>
         </div>

         <div class="row">
         <div class="col">
            <label for="From" >From</label>
            <input  type="text"  Name="From" id="From" placeholder="Enter From" class="form-control
            @error('Number') is-invalid @enderror">
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         

         <div class="col">
            <label for="F_Date" >From Date:</label>
            <input  type="Date"  name="F_Date" id="F_Date" class="form-control
            @error('Date') is-invalid @enderror">
            @error('Date')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>

         <div class="row">
         <div class="col"><br>
            <label for="To" >TO</label>
            <input  type="text"  Name="To" id="To" placeholder="Enter To" class="form-control
            @error('Number') is-invalid @enderror">
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>

         <div class="col"><br>
            <label for="F_Date" >Expeted To Date:</label>
            <input  type="Date"  name="T_Date" id="T_Date" class="form-control
            @error('Date') is-invalid @enderror">
            @error('Date')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>


         <div class="row">
         <div class="col"><br>
        <label for="Route" >Select Route:</label><br>
        <select class="form-control" name="Route">
            <option value="Select Routes">Select Route</option>
                @foreach($route as $route)
                    <option value="{{ $route->Name }}">{{$route->Name}}</option>
                @endforeach
        </select><br>
        </div><br>

        <div class="col"><br>
        <label for="customer" >Select Customer:</label><br>
        <select class="form-control" name="customer">
            <option value="Select Customer">Select Customer</option>
                @foreach($customer as $customer)
                    <option value="{{ $customer->Name }}">{{$customer->Name}}</option>
                @endforeach
        </select><br>
        </div></div>

        <div class="row">
        <div class="col">
        <label for="Driver" >Select Driver:</label><br>
        <select class="form-control" name="Driver">
            <option value="Select Driver">Select Driver</option>
                @foreach($driver as $driver)
                    <option value="{{ $driver->Name }}">{{$driver->Name}}</option>
                @endforeach
        </select><br>
        </div>

        <div class="col"> 
            <label for="Mileage" >Mileage(in KMs)</label>
            <input  type="text"  Name="Mileage" id="Mileage" placeholder="Enter Mileage" class="form-control
            @error('Number') is-invalid @enderror">
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>


        
         <input  type="hidden"  Name="FE" id="FE" value="0" class="form-control
            @error('Number') is-invalid @enderror">
        
            <input  type="hidden"  Name="RE" id="RE" value="0" class="form-control
            @error('Number') is-invalid @enderror">
        
            <input  type="hidden"  Name="OE" id="OE" value="0" class="form-control
            @error('Number') is-invalid @enderror">

            <input  type="hidden"  Name="Spent" id="Spent" value="0" class="form-control
            @error('Number') is-invalid @enderror">


            
         <label for="Status" >Select Status:</label><br>
        <select class="form-control" name="Status">
            <option value="Loaded">Loaded</option>
            <option value="Empty">Empty</option>

        </select><br>
        <button type="submit"class="btn btn-primary "> Open Trip </button><br>
        <br>    
</div>
</div>
</div>

</body>
</html>

@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection
