<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\route;
use App\Models\customer;
use App\Models\driver;
use App\Models\vehicle;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalvehicle = vehicle::count();
        $totalDriver = driver::count();
        $activeDriver = driver::where('Status','Active')->count();
        $InactiveDriver = driver::where('Status','InActive')->count();
        
        $CompletedTrip = Trip::Where('T_S','Completed')->count();
        $OngoingTrip = Trip::Where('T_S','OnGoing')->count();
        $S_L = Trip::Where('Status','Loaded')->count();
        $S_E = Trip::Where('Status','Empty')->count();


        $totalcustomer = customer::count();
        $C_A = customer::Where('Status','Active')->count();
        $C_I = customer::Where('Status','InActive')->count();

        $thisMonth=Carbon::now()->format('m');
        $thisYear=Carbon::now()->format('Y');




        $thisYearTrip = Trip::WhereYear('T_Date', $thisYear )->count();
        $thisMonthTrip = Trip::WhereMonth('T_Date', $thisMonth )->count();


        return view('dashboard',compact ('totalvehicle','totalDriver','activeDriver','totalcustomer',
        'InactiveDriver','CompletedTrip','OngoingTrip','thisMonthTrip','thisYearTrip','C_I','C_A' ,'S_L','S_E',));
    }

}
