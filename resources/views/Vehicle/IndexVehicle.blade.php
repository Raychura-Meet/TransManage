
<html>
    <head>
    <title> Vehicle </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <style>
tr ,td,th
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
            <div class ="h4">Vehicle Details</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Vehicle</div> 
            <div>
               <a href="{{ route('vehicle.add') }}"  class="btn btn-primary" >Add Vehicle</a>
            </div>
        </div>
    </div>

    <div class="card border-1 shadow-ig">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Company</th>
                    <th>Model</th>
                    <th>Number Plate</th>
                    <th>Total KM</th>
                    <th>Insurance Number</th>
                    <th>PUC</th>
                    <th>Insurance</th>
                    <th>Action</th>
                </tr>
            @if($vehicle->isNotEmpty())
            @foreach($vehicle as $vehicles)
                <tr>
                    <td>{{ $vehicles->id}}</td>
                    <td>
                        <img src="{{ url ('/uploads/v_image/'.$vehicles->image) }}"  alt="" width="40" height="40"
                        class="square">
                    </td>
                    <td>{{ $vehicles->company}}</td>
                    <td>{{ $vehicles->Model}}</td>
                    <td>{{ $vehicles->Number_Plate}}</td>
                    <td>{{ $vehicles->Total_km}}</td>
                    <td>{{ $vehicles->Insurance_no}}</td>
                    <td>
                    <a href="{{ url ('uploads/PUC/'.$vehicles->puc) }}" class="btn btn-info" >View</a><br>
                    <p>Expiry Date:<br>{{ $vehicles->I_Date}}</p>
                    </td>

                    <td>
                    <a href="{{ url ('uploads/Insurance/'.$vehicles->Insurance) }}" class="btn btn-info" >View</a>
                    <p>Expiry Date:<br>{{ $vehicles->P_Date}}</p>
                    </td>

                    <td>
                    <a href="{{ route('vehicle.edit',$vehicles->id) }}" class="btn btn-primary" >Edit</a>  
                    <a href="#" onclick="deletevehicle({{ $vehicles->id}})"class="btn btn-danger btn-sm" >Delete</a>
                    <form id="vehicle-edit-action-{{ $vehicles->id  }}"action="{{ route('vehicle.destroy',$vehicles->id ) }}" method="post"> 
                    @csrf
                    @method('delete')


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
{{ $vehicle->links() }}
</div>
</div>

</body>
</html>


<script>
function deletevehicle(id){
    if(confirm("Are You Sure you want to delete ?"))
    {
            document.getElementById('vehicle-edit-action-'+id).submit();
    }
}



</script>
@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection