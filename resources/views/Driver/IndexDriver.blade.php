

<html>
    <head>
    <title> Driver </title>
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
    <div class ="py-3">
        <div class ="container">
            <div class ="h4">Driver Details</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Driver</div> 
            <div>
               <a href="{{ route('Driver.add') }}"  class="btn btn-primary" >Add Driver</a>
            </div>
        </div>
    </div>

    <div class="card border-1 shadow-ig">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                    <th>Alternate Contact Number</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>License Number</th>
                    <th>License(PDF)</th>
                    <th>Expiry Date(License)</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @if($Driver->isNotEmpty())
            @foreach($Driver as $Drivers)
                <tr>
                    <td>{{ $Drivers->id}}</td>

                    <td>
                        <img src="{{ url ('uploads/image/'.$Drivers->image) }}"  alt="" width="40" height="40"
                        class="rounded-circle">
                    </td>



                    <td>{{ $Drivers->Name}}</td>
                    <td>{{ $Drivers->Age}}</td>
                    <td>{{ $Drivers->Contact}}</td>
                    <td>{{ $Drivers->A_Contact}}</td>
                    <td>{{ $Drivers->City}}</td>
                    <td>{{ $Drivers->Address}}</td>
                    <td>{{ $Drivers->L_no}}</td>
                    
                    <td>
                    <a href="{{ url ('uploads/D_L/'.$Drivers->D_L) }}" class="btn btn-info" >View</a>
                    </td>
                    <td>{{ $Drivers->Date}}</td> 
                    <td>{{ $Drivers->Status}}</td>


                    <td>
                    <a href="{{ route('Driver.edit',$Drivers->id) }}" class="btn btn-primary" >Edit</a>
                    <a href="#" onclick="deleteDriver({{ $Drivers->id}})" class="btn btn-danger btn-sm" >Delete</a>
                <form id="driver-edit-action-{{ $Drivers->id  }}"action="{{ route('Driver.destroy',$Drivers->id ) }}" method="post"> 
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
{{ $Driver->links() }}
</div>

</div>

</body>
</html>
<script>
function deleteDriver(id){
    if(confirm("Are You Sure you want to delete ?"))
    {
            document.getElementById('driver-edit-action-'+id).submit();
    }
}



</script>
@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection
