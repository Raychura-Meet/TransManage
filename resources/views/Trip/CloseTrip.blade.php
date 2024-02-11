<html>
    <head>
    <title> Vehicle </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    tr ,td,th
    {
            text-align: center;
            border: 1px solid;
    }
    </style>
</head>
<body>
@extends('layouts.main')

@section('title')
    Settings
@endsection

@section('content')
    <div class =" py-3">
        <div class ="container">
            <div class ="h4">Closed Trips</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Trip</div> 

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
                    <th>Trip Status</th>
                    <th>Action</th>
                    <th>Recipt</th>
                    
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
                    <td>{{ $Trips->T_S}}</td>
                    <td>
                    <a href="{{ route('Trip.edit',$Trips->id) }}" class="btn btn-primary" >Update Trip</a>  
                    </td>
                    <td>
                    <a href="{{ route('Trip.View',$Trips->id) }}"target="_blank" class="btn btn-primary" >View</a>  
                    <a href="{{ route('Trip.Print',$Trips->id) }}" class="btn btn-Warning" >Print</a>  
                    </td>
                    @csrf






                </form>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="12">Record Not Found</td>
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