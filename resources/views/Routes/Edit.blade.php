
<html>
    <head>
    <title> Routes </title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
@extends('layouts.main')

@section('title')
    Settings
@endsection

@section('content')
    <div class ="py-3">
        <div class ="container">
            <div class ="h4">Routes Details</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Add Routes</div> 
            <div>
               <a href="{{ route('Routes.index') }}" class="btn btn-primary" >Back</a>
            </div>
        </div>
    </div>



    <form action="{{ route('Routes.update',$Routes->id) }}" method="post" >
        @csrf
        @method('put')

    <div class="card border-0 shadow-ig">
        <div class="card-body">

        <div class="md-3">
            <label for="Name" >Name</label>
            <input  type="text"  Name="Name" id="Name" placeholder="Enter Name" class="form-control
            @error('Name') is-invalid @enderror"value="{{old('Name',$Routes->Name) }} ">
            @error('Name')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
         </div><br>



         <button type="submit"class="btn btn-primary "> Update Routes </button>

</div>
</div>


</form>

</body>
</html>

@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection