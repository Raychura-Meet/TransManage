<?php

namespace App\Http\Controllers;
use App\Models\Trip;
use App\Models\route;
use App\Models\driver;
use App\Models\vehicle;
use App\Models\customer;
use Illuminate\Http\Request;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Carbon;

class TripController extends Controller
{
    public function index()
    {
        return view('Trip.OpenTrip');
    }
    public function dropDownShow(Request $request)
    {
       $vehicle = vehicle::all();
       $route = route::all();
       $driver = driver::Where('Status','Active')->get();
       $customer = customer::Where('Status','Active')->get();
       return view('Trip.OpenTrip', compact('vehicle','route','customer','driver'));
    }


    public function OnGoing()
    {

        $Trip = Trip::Where('T_S','OnGoing')->orderBy('id','DESC')->Paginate(5);

        return view('Trip.OnGoingTrip',['Trip' => $Trip]);
    }


    public function Close()
    {

        $Trip = Trip::Where('T_S','Completed')->orderBy('id','DESC')->Paginate(5);

        return view('Trip.CloseTrip',['Trip' => $Trip]);
    }






    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'model' => 'required',
            'Route' => 'required',
            'Driver' => 'required',
            'Mileage' => 'required',
            'Status' => 'required'


        ]);
                //save data
                $Trip = new Trip();
                $Trip->Model = $request->Model;
                $Trip->Route = $request->Route;
                $Trip->Driver = $request->Driver;
                $Trip->customer = $request->customer;
                $Trip->Mileage = $request->Mileage;
                $Trip->Status = $request->Status;
                $Trip->From = $request->From;
                $Trip->To = $request->To;
                $Trip->Cash = $request->Cash;
                $Trip->Spent = $request->Spent;

                $Trip->F_Date = $request->F_Date;
                $Trip->T_Date = $request->T_Date;
                $Trip->save();
    
                $request->session()->flash('Success','Trip Added Successfully.');
                return redirect()->route('Trip.store');
    
    }

    public function edit($id) 
    {


        $Trip = Trip::findOrfail($id);

            return view('Trip.edit',['Trip'=> $Trip]);

    }



    public function View($id) 
    {

        $Trip = Trip::findOrfail($id);

            return view('Trip.View',['Trip'=> $Trip]);

    }

    public function Print($id) 
    {

        $Trip = Trip::findOrfail($id);
        $data= ['Trip'=>$Trip];


        $pdf = Pdf::loadView('Trip.View',['Trip'=> $Trip]);


        return $pdf->download('Recipt'.$Trip->id.'.pdf');



    }




    public function update($id, Request $request){

        $validator = Validator::make($request->all(),
        [
            'model' => 'required',
            'Route' => 'required',
            'Driver' => 'required',
            'Mileage' => 'required',
            'Status' => 'required',
            'FE' => 'required',
            'RE' => 'required',
            'OE' => 'required',
            'T_S' => 'required',




        ]);
                //save data
                $Trip = Trip::find($id);
                $Trip->Model = $request->Model;
                $Trip->Route = $request->Route;
                $Trip->Driver = $request->Driver;
                $Trip->Mileage = $request->Mileage;
                $Trip->Status = $request->Status;
                $Trip->FE = $request->FE;
                $Trip->RE = $request->RE;
                $Trip->OE = $request->OE;
                $Trip->T_S = $request->T_S;
                $Trip->customer = $request->customer;
                $Trip->F_Date = $request->F_Date;
                $Trip->T_Date = $request->T_Date;


                $Trip->save();
    
                $request->session()->flash('Success','Trip Added Successfully.');
                return redirect()->route('Trip.OnGoing');

    }

}