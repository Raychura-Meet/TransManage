
<html>
    <head>
    <title> Routes </title>
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
            <div class ="h4">Routes Details</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Routes</div> 
            <div>
               <a href="{{ route('Routes.add') }}"  class="btn btn-primary" >Add Routes</a>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-ig">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>


                    <th>Action</th>
                    
                </tr>
                @if($Routes->isNotEmpty())
            @foreach($Routes as $Routess)
                <tr>
                    <td>{{ $Routess->id}}</td>
                    <td>{{ $Routess->Name}}</td>

                    <td>
                    <a href="{{ route('Routes.edit',$Routess->id) }}" class="btn btn-primary" >Edit</a>  
                    <a href="#"onclick="deleteRoutes({{ $Routess->id}})" class="btn btn-danger btn-sm" >Delete</a>
                    <form id="Routes-edit-action-{{ $Routess->id  }}"action="{{ route('Routes.destroy',$Routess->id ) }}" method="post"> 
                    @csrf
                    @method('delete')


                </form>

                
                
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3">Record Not Found</td>
            @endif
</table>
</div>
</div>
<div>
{{ $Routes->links() }}
</div>
</div>

</body>
</html>
<script>
function deleteRoutes(id){
    if(confirm("Are You Sure you want to delete ?"))
    {
            document.getElementById('Routes-edit-action-'+id).submit();
    }
}



</script>
@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection