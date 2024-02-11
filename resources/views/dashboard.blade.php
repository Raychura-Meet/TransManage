@extends('layouts.main')

@section('title') Home @endsection
@section('content')
        <section class="section">
        </section>

        <div class="row">
<div class="col-md-12 grid-margin">


<h2>Dashboard, </h2>
<hr>
</div>

        <div class="row">
                 <div class="col-md-3">
                        <div class="card card-body bg-primary text-white mb-3">
                                <label>Total Vehicle</label>
                                <h1>{{ $totalvehicle }}</h1>
                                 <a href="{{ url('vehicle') }}" class="text-white">View</a>
                        </div>

                </div>

                <div class="col-md-3">
                        <div class="card card-body bg-warning text-white mb-3">
                                <label>Total Driver</label>
                                <h1>{{ $totalDriver }}</h1>
                                <a href="{{ url('Driver') }}" class="text-white">View</a>
                        </div>
                </div>



                <div class="col-md-3">
                        <div class="card card-body bg-info   text-white mb-3">
                                <label>Active Driver</label>
                                <h1>{{ $activeDriver }}</h1>
                                <a href="{{ url('Driver') }}" class="text-white">View</a>
                        </div>
                </div>

                <div class="col-md-3">
                        <div class="card card-body bg-danger text-white mb-3">
                                <label>InActive Driver</label>
                                <h1>{{ $InactiveDriver }}</h1>
                                <a href="{{ url('Driver') }}" class="text-white">View</a>
                        </div>
                </div>
        </div>

        <div class="row">
                 <div class="col-md-3">
                        <div class="card card-body bg-info text-white mb-3">
                                <label>Completed Trip</label>
                                <h1>{{ $CompletedTrip }}</h1>
                                 <a href="{{ url('CloseTrip')}}" class="text-white">View</a>
                        </div>

        </div>

                <div class="col-md-3">
                        <div class="card card-body bg-danger text-white mb-3">
                                <label>OnGoing Trip</label>
                                <h1>{{ $OngoingTrip }}</h1>
                                 <a href="{{ url('OnGoingTrip')}}" class="text-white">View</a>
                        </div>

                </div>

                <div class="col-md-3">
                        <div class="card card-body bg-primary text-white mb-3">
                                <label>Trip This Month</label>
                                <h1>{{ $thisMonthTrip }}</h1>
                                 <a href="{{ url('OnGoingTrip')}}" class="text-white">View</a>
                        </div>

                </div>      

                <div class="col-md-3">
                        <div class="card card-body bg-warning text-white mb-3">
                                <label>Loaded vehicle</label>
                                <h1>{{ $S_L}}</h1>
                                 <a href="{{ url('OnGoingTrip')}}" class="text-white">View</a>
                        </div>

                </div>     

                <div class="col-md-3">
                        <div class="card card-body bg-warning text-white mb-3">
                                <label>Total Customer</label>
                                <h1>{{ $totalcustomer }}</h1>
                                 <a href="{{ url('customer')}}" class="text-white">View</a>
                        </div>

                </div>      


                <div class="col-md-3">
                        <div class="card card-body bg-success text-white mb-3">
                                <label>Active Customer</label>
                                <h1>{{ $C_A}}</h1>
                                <a href="{{ url('customer')}}" class="text-white">View</a>
                        </div>
                </div>

                <div class="col-md-3">
                        <div class="card card-body bg-info text-white mb-3">
                                <label>InActive Customer</label>
                                <h1>{{ $C_I }}</h1>
                                 <a href="{{ url('customer')}}" class="text-white">View</a>
                        </div>

                </div>      


                <div class="col-md-3">
                        <div class="card card-body bg-success text-white mb-3">
                                <label>Empty Vehicle</label>
                                <h1>{{ $S_E }}</h1>
                                <a href="{{ url('OnGoingTrip')}}" class="text-white">View</a>
                        </div>
                </div>


 
@endsection
