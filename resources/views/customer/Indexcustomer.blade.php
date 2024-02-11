

<html>
    <head>
    <title> Customer </title>
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
            <div class ="h4">Customer Details</div>
        </div>
    </div>

    <div class ="container py-3">
        <div class ="d-flex justify-content-between">
            <div class ="h5">Customer</div> 
            <div>
               <a href="{{ route('customer.add') }}"  class="btn btn-primary" >Add customer</a>
            </div>
        </div>
    </div>

    <div class="card border-1 shadow-ig">
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact Number</th>
                    <th>Alternate Contact Number</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @if($customer->isNotEmpty())
            @foreach($customer as $customers)
                <tr>
                    <td>{{ $customers->id}}</td>




                    <td>{{ $customers->Name}}</td>
                    <td>{{ $customers->Contact}}</td>
                    <td>{{ $customers->A_Contact}}</td>
                    <td>{{ $customers->City}}</td>
                    <td>{{ $customers->Address}}</td>

                    

                    <td>{{ $customers->Status}}</td>


                    <td>
                    <a href="{{ route('customer.edit',$customers->id) }}" class="btn btn-primary" >Edit</a>
                    <a href="#" onclick="deletecustomer({{ $customers->id}})" class="btn btn-danger btn-sm" >Delete</a>
                <form id="customer-edit-action-{{ $customers->id  }}"action="{{ route('customer.destroy',$customers->id ) }}" method="post"> 
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
{{ $customer->links() }}
</div>

</div>

</body>
</html>
<script>
function deletecustomer(id){
    if(confirm("Are You Sure you want to delete ?"))
    {
            document.getElementById('customer-edit-action-'+id).submit();
    }
}


</script>
@endsection

@section('script')<script src="{{ url('assets/js/custom/users/users.js') }}"></script>@endsection
