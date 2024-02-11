<html>
    <head>
    <title> Driver </title>
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
            <div class ="h4">Driver Details</div>
        </div>
    </div>
    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Add Driver</div> 
            <div>
               <a href="{{ route('Driver.index') }}" class="btn btn-primary" >Back</a>
            </div>
        </div>
    </div>
    <form action="{{ route('Driver.store') }}" method="post"  enctype="multipart/form-data">
        @csrf
    <div class="card border-0 shadow-ig">
        <div class="card-body">
        <div class="row">
        <div class="col"><br>
            <label for="Name" >Name</label>
            <input  type="text"  name="Name" id="Name" placeholder="Enter Name" class="form-control
            @error('Name') is-invalid @enderror">
            @error('Name')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         <div class="col"><br>
            <label for="Image" >Image</label>
            <input  type="File"  name="image" id="image" class="form-control
            @error('L_no') is-invalid @enderror">
            @error('L_no')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
         <div class="row">
            <div class="col"><br>
            <label for="Age" >Age</label>
            <input  type="text"  name="Age" id="Age" placeholder="Enter Age" class="form-control            
            @error('Age') is-invalid @enderror">
            @error('Age')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
            <div class="col"><br>
            <label for="Contact" >Contact</label>
            <input  type="text"  name="Contact" id="Contact" placeholder="Enter Contact" class="form-control
            @error('Contact') is-invalid @enderror">
            @error('Contact')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
         <div class="row">
         <div class="col"><br>
            <label for="Alternate Contact" >Alternate Contact(Family)</label>
            <input  type="text"  name="A_Contact" id="A_Contact" placeholder="Enter Alternate Contact" class="form-control
            @error('Contact') is-invalid @enderror">
            @error('Contact')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>

         <div class="col"><br>
            <label for="City" >City</label>
            <input  type="text"  name="City" id="City" placeholder="Enter City" class="form-control
            @error('City') is-invalid @enderror">
            @error('City')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
         <div class="row">
         <div class="col"><br>
            <label for="Address" >Address</label>
            <input  type="text"  name="Address" id="Address" placeholder="Enter Address" class="form-control
            @error('Address') is-invalid @enderror">
            @error('Address')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         <div class="col"><br>
            <label for="L_no" >License Number</label>
            <input  type="text"  name="L_no" id="L_no" placeholder="Enter License Number" class="form-control
            @error('L_no') is-invalid @enderror">
            @error('L_no')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
         <div class="row">
         <div class="col"><br>
            <label for="D_L" >License Scan(pdf)</label>
            <input  type="File"  name="D_L" id="D_L" class="form-control
            @error('L_no') is-invalid @enderror">
            @error('L_no')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         <div class="col"><br>
            <label for="Date" >Expiry Date(License):</label>
            <input  type="Date"  name="Date" id="Date" class="form-control
            @error('Date') is-invalid @enderror">
            @error('Date')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         </div>
         <div class="row">
         <div class="col"><br>
         <label for="Status" >Select Status:</label><br>
        <select class="form-control" name="Status">
            <option value="Active">Active</option>
            <option value="InActive">InActive</option>
        </select><br>
        </div>
</div>
</div>
<button type="submit" class="btn btn-primary "> ADD Driver </button>
</form>
</body>
</html>
@endsection
@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection