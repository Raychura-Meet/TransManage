<html>
    <head>
    <title> Customer </title>
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
            <div class ="h4">Customer Details</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Edit Customer</div> 
            <div>
               <a href="{{ route('customer.index') }}" class="btn btn-primary" >Back</a>
            </div>
        </div>
    </div>



    <form action="{{ route('customer.update',$customer->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
    <div class="card border-0 shadow-ig">
        <div class="container">

        <div class="row">
        <div class="col"><br>
            <label for="Name" >Name</label>
            <input  type="text"  name="Name" id="Name" placeholder="Enter Name" class="form-control
            @error('Name') is-invalid @enderror"value="{{old('Name',$customer->Name) }} ">
            @error('Name')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>


            <div class="col"><br>
            <label for="Contact" >Contact</label>
            <input  type="text"  name="Contact" id="Contact" placeholder="Enter Contact" class="form-control
            @error('Contact') is-invalid @enderror"value="{{old('Contact',$customer->Contact) }} ">
            @error('Contact')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
</div>
         <div class="row">
         <div class="col"><br>
         <label for="Alternate Contact" >Alternate Contact(Family)</label>
            <input  type="text"  name="A_Contact" id="A_Contact" placeholder="Enter Alternate Contact(Family)" class="form-control
            @error('Contact') is-invalid @enderror"value="{{old('A_Contact',$customer->A_Contact) }} ">
            @error('Contact')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>






         <div class="col"><br>
            <label for="City" >City</label>
            <input  type="text"  name="City" id="City" placeholder="Enter City" class="form-control
            @error('City') is-invalid @enderror"value="{{old('City',$customer->City) }} ">
            @error('City')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
</div>
         <div class="row">
         <div class="col"><br>
            <label for="Address" >Address</label>
            <input  type="text"  name="Address" id="Address" placeholder="Enter Address" class="form-control
            @error('Address') is-invalid @enderror"value="{{old('Address',$customer->Address) }} ">
            @error('Address')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>
         




         <div class="col"><br>
         <label for="Status" >Select Status:</label><br>
        <select class="form-control" name="Status">
            <option value="Active">Active</option>
            <option value="InActive">InActive</option>

        </select><br>


</div>
</div>
<button type="submit" class="btn btn-primary "> Update Customer </button>

</form>

</body>
</html>

@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection