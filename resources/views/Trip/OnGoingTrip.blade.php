<html>
    <head>
    <title> OnGoing </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<style>
    tr, td ,th
    {
            text-align: center;
    }
    </style>
@extends('layouts.main')

@section('title')
    Settings
@endsection

@section('content')
    <div class =" py-3">
        <div class ="container">
            <div class ="h4">OnGoing Trips</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Trips</div> 
            <div>
               <a href="{{ url('Trip') }}"  class="btn btn-primary" >Add/Open Trip</a>
            </div>
        </div>
    </div>

    <div class="card border-1 shadow-ig">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                <th>ID</th>
                    <th>Vehicle/Model</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Route</th>
                    <th>Driver</th>
                    <th>Mileage(in KMs)</th>
                    <th>Status</th>

                    <th>Customer</th>
                    <th>Action</th>
                </tr>


            @if($Trip->isNotEmpty())
            @foreach($Trip as $Trips)
                <tr>
                <td>{{ $Trips->id}}</td>
                    <td>{{ $Trips->Model}}</td>
                    <td>{{ $Trips->From}}</td>
                    <td>{{ $Trips->To}}</td>
                    <td>{{ $Trips->Route}}</td>
                    <td>{{ $Trips->Driver}}</td>
                    <td>{{ $Trips->Mileage}}</td>
                    <td>{{ $Trips->Status}}</td>

                    <td>{{ $Trips->customer}}</td>
                    <td>
                    <a href="{{ route('Trip.edit',$Trips->id) }}" class="btn btn-primary" >Edit/Update Trip</a>  
                    </td>
                    @csrf






                </form>

                
                
</tr>
@endforeach
            @else
            <tr>
                <td colspan="10">Record Not Found</td>
            </tr>
            @endif

</table>
</div>
</div>
<div>
{{ $Trip->links() }}
</div>
</div>

</body>
</html>

</script>
@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection