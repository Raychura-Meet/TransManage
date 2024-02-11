
<html>
    <head>
    <title> Vehicle </title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

@extends('layouts.main')

@section('title')
    Settings
@endsection

@section('content')
    <div class =" py-3">
        <div class ="container">
            <div class ="h4">Vehicle Details</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Add Vehicle</div> 
            <div>
               <a href="{{ route('vehicle.index') }}" class="btn btn-primary" >Back</a>
            </div>
        </div>
    </div>



    <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="card border-0 shadow-ig">
        <div class="container">

        <div class="row">
         

        <div class="col"><br>
            <label for="company" >Company Name:</label>
            <input  type="text"  name="company" id="company" placeholder="Enter Company" class="form-control
            @error('model') is-invalid @enderror">
            @error('model')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>

         <div class="col"><br>
            <label for="image" >Image</label>
            <input  type="File"  name="image" id="image" class="form-control
            @error('L_no') is-invalid @enderror">
            @error('L_no')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
</div>


         <div class="row">
            <div class="col"><br>
            <label for="model" >Model</label>
            <input  type="text"  name="model" id="model" placeholder="Enter Model" class="form-control
            @error('model') is-invalid @enderror">
            @error('model')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>


            <div class="col"><br>
            <label for="Number_Plate" >Number Plate</label>
            <input  type="text"  name="Number_Plate" id="Number_Plate" placeholder="GJ00XX0000" class="form-control            
            @error('Number_Plate') is-invalid @enderror">
            @error('Number_Plate')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>

         <div class="row">
         <div class="col"><br>
            <label for="Total_km" >Total KM</label>
            <input  type="text"  name="Total_km" id="Total_km" placeholder="Total KM" class="form-control            
            @error('Number_Plate') is-invalid @enderror">
            @error('Number_Plate')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>


            <div class="col"><br>
            <label for="Insurance_no" >Insurance Number</label>
            <input  type="text"  name="Insurance_no" id="Insurance_no" placeholder="Enter Insurance Number" class="form-control
            @error('Insurance_no') is-invalid @enderror">
            @error('Insurance_no')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
         <div class="row">

         <div class="col"><br>
            <label for="Insurance" >Insurance(pdf)</label>
            <input  type="File"  name="Insurance" id="Insurance" class="form-control
            @error('L_no') is-invalid @enderror">
            @error('L_no')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>

         <div class="col"><br>
            <label for="I_Date" >Expiry Date(Insurance):</label>
            <input  type="Date"  name="I_Date" id="I_Date" class="form-control
            @error('Date') is-invalid @enderror">
            @error('Date')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>

         </div>
         <div class="row">

         <div class="col"><br>
            <label for="puc" >PUC(pdf)</label>
            <input  type="File"  name="PUC" id="puc" class="form-control
            @error('L_no') is-invalid @enderror">
            @error('L_no')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>


         
         <div class="col"><br>
            <label for="P_Date" >Expiry Date(PUC):</label>
            <input  type="Date"  name="P_Date" id="P_Date" class="form-control
            @error('Date') is-invalid @enderror">
            @error('Date')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         <br><br>
         </div>    <br><br>
</div>
</div>
<button  type="submit" class="btn btn-primary "> ADD Vehicle </button>

</form>

</body>
</html>

@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection