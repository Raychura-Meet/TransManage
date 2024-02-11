

<html>
    <head>
    <title> Edit/Update Trip </title>
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
            <div class ="h5">Edit/Update Trip</div> 
            <div>
               <a href="{{ route('Trip.OnGoing') }}"  class="btn btn-primary" >Ongoing Trip</a>
            </div>
        </div>
    </div>

    <form action="{{ route('Trip.update',$Trip->id) }}" method="post" >
        @csrf
        @method('put')

    <div class="card border-0 shadow-ig">
        <div class="card-body">

        <div class="row">
        <div class="col">
        <label for="Model" >Vehicle:</label><br>
        <select class="form-control" name="Model">
        <option value="{{old('Model',$Trip->Model) }}" selected>{{$Trip->Model}}</option>
        

        </select><br>  
        </div>
        <div class="col">
            <label for="From" >From</label>
            <input  type="text"  Name="From" id="From" placeholder="Enter From" class="form-control
            @error('Number') is-invalid @enderror"value="{{old('From',$Trip->From) }}"readonly>
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
         <div class="row">
         <div class="col">
            <label for="F_Date" >From Date:</label>
            <input  type="Date"  Name="F_Date" id="F_Date" placeholder="Enter From" class="form-control
            @error('Number') is-invalid @enderror"value="{{old('F_Date',$Trip->F_Date) }}">
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>


         <div class="col">
            <label for="To" >To</label>
            <input  type="text"  Name="To" id="To" placeholder="Enter To" class="form-control
            @error('Number') is-invalid @enderror"value="{{old('To',$Trip->To) }}"readonly>
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
        <div class="row">
         <div class="col"><br>
            <label for="F_Date" >To Date:</label>
            <input  type="Date"  Name="T_Date" id="T_Date" placeholder="Enter To" class="form-control
            @error('Number') is-invalid @enderror"value="{{old('T_Date',$Trip->T_Date) }}">
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>

         <div class="col"><br>
        <label for="Route" >Route:</label><br>
        <select class="form-control" name="Route">
        <option value="{{old('Route',$Trip->Route) }}" selected>{{$Trip->Route}}</option>
        </div>
        </select>
        </div>
        </div>

        <div class="row">
        <div class="col"> <br>
        <label for="Driver" >Driver:</label><br>
        <select class="form-control" name="Driver">
        <option value="{{old('Driver',$Trip->Driver) }}" selected>{{$Trip->Driver}}</option>
        </select>
        </div>

        <div class="col"><br>
        <label for="customer" >Customer:</label><br>
        <select class="form-control" name="customer">
        <option value="{{old('customer',$Trip->customer) }}" selected>{{$Trip->customer}}</option>
        </select>
        </div>
        </div>

        <div class="row">
        <div class="col"><br>
            <label for="Mileage" >Mileage(in KMs)</label>
            <input  type="text"  Name="Mileage" id="Mileage" placeholder="Enter Mileage" class="form-control
            @error('Number') is-invalid @enderror"value="{{old('Mileage',$Trip->Mileage) }}">
            @error('Number')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>

         <div class="col"><br>
            <label for="Cash" >Cash Given</label>
            <input  type="text"  name="Cash" id="Cash" placeholder="Enter Cash Given" class="form-control
            @error('OE') is-invalid @enderror"value="{{old('Cash',$Trip->Cash) }}">
            @error('OE')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>

         <div class="row">
         <div class="col"><br>
         <label for="Status" >Select Status:</label><br>
        <select class="form-control" name="Status">
        <option value="{{old('Status',$Trip->Status) }}" selected>{{$Trip->Status}}</option>
        </select>
        </div>

        <div class="col"><br>
            <label for="Food Expenses" >Food Expenses</label>
            <input  type="text"  name="FE" id="Food Expenses" placeholder="Enter Food Expenses" class="form-control
            @error('FE') is-invalid @enderror"value="{{old('FE',$Trip->FE) }}">
            @error('FE')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>

         <div class="row">
         <div class="col"><br>
            <label for="Road Expenses" >Fuel Expenses</label>
            <input  type="text"  name="RE" id="Road Expenses" placeholder="Enter Fuel Expenses" class="form-control
            @error('RE') is-invalid @enderror"value="{{old('RE',$Trip->RE) }}">
            @error('RE')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         

         <div class="col"><br>
            <label for="Other Expenses" >Other Expenses</label>
            <input  type="text"  name="OE" id="Other Expenses" placeholder="Enter Other Expenses" class="form-control
            @error('OE') is-invalid @enderror"value="{{old('OE',$Trip->OE) }}">
            @error('OE')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>

         <div class="row">
         <div class="col"><br>
         <label for="Trip Status" >Select Trip Status:</label><br>
        <select class="form-control" name="T_S">
            <option value="OnGoing">OnGoing</option>
            <option value="Completed">Completed</option>

        </select><br>
        </div>

        </div>

        <button type="submit"class="btn btn-primary "> Update Trip </button>
</div>
</div>
</div>

</body>
</html>

@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection
