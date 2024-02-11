<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = vehicle::orderBy('id','DESC')->Paginate(3);


        return view('vehicle.Indexvehicle',['vehicle' => $vehicle]);
    }
    public function add()
    {
        return view('vehicle.Addvehicle');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'model' => 'required',
            'Number_Plate' => 'required',
            'Insurance_no' => 'required',
            'company' => 'required',
            'image' => 'required',
            'puc' => 'required',
            'Insurance' => 'required',
            'Total_km' => 'required'



        ]);

       // if ( $validator->passes() ) {
                //save data
            $vehicle = new vehicle();
            $vehicle->model = $request->model;
            $vehicle->Number_Plate = $request->Number_Plate;
            $vehicle->Insurance_no = $request->Insurance_no;
            $vehicle->company = $request->company;
            $vehicle->Total_km = $request->Total_km;
            $vehicle->P_Date = $request->P_Date;
            $vehicle->I_Date = $request->I_Date;



        //image
        $request->image;
        $ext =  $request->image->getClientOriginalExtension();
        $newFileName=time().'.'.$ext;
        $request->image->move(public_path().'/uploads/v_image/',$newFileName);
        $vehicle->image = $newFileName;

        //Insurance
        $request->Insurance;
        $ext =  $request->Insurance->getClientOriginalExtension();
        $newFileName=time().'.'.$ext;
        $request->Insurance->move(public_path().'/uploads/Insurance/',$newFileName);
        $vehicle->Insurance = $newFileName; 


        //PUC
        $request->PUC;
        $ext =  $request->PUC->getClientOriginalExtension();
        $newFileName=time().'.'.$ext;
        $request->PUC->move(public_path().'/uploads/PUC/',$newFileName);
        $vehicle->PUC = $newFileName; 






            $vehicle->save();

            $request->session()->flash('Success','vehicle Added Successfully.');
            return redirect()->route('vehicle.index');


       // } //else {
            //return
           // return redirect()->route('vehicle.add')->withErrors($validator);
        //}

    }
    public function edit($id) 
    {
        $vehicle = vehicle::findOrfail($id);

            return view('vehicle.Edit',['vehicle'=> $vehicle]);

    }

    public function update($id, Request $request){
        $validator = Validator::make($request->all(),
        [
            'model' => 'required',
            'Number_Plate' => 'required',
            'Insurance_no' => 'required',
            'company' => 'required',

            'puc' => 'required',
            'Insurance' => 'required',
            'Total_km' => 'required'
        ]);

        //if ( $validator->passes() ) {
            //save data
            $vehicle = vehicle::find($id);
            $vehicle->model = $request->model;
            $vehicle->Number_Plate = $request->Number_Plate;
            $vehicle->Insurance_no = $request->Insurance_no;
            $vehicle->company = $request->company;
            $vehicle->Total_km = $request->Total_km;
            $vehicle->P_Date = $request->P_Date;
            $vehicle->I_Date = $request->I_Date;

        //Insurance
        $request->Insurance;
        $ext =  $request->Insurance->getClientOriginalExtension();
        $newFileName=time().'.'.$ext;
        $request->Insurance->move(public_path().'/uploads/Insurance/',$newFileName);
        $vehicle->Insurance = $newFileName; 


        //PUC
        $request->PUC;
        $ext =  $request->PUC->getClientOriginalExtension();
        $newFileName=time().'.'.$ext;
        $request->PUC->move(public_path().'/uploads/PUC/',$newFileName);
        $vehicle->PUC = $newFileName; 






            $vehicle->save();

        $request->session()->flash('Success','vehicle Added Successfully.');
        return redirect()->route('vehicle.index');


    } //else {
        //return
        //return redirect()->route('vehicle.add')->withErrors($validator);
   // }
   public function destroy($id, Request $request){
    $vehicle = vehicle::findorFail($id);
    $vehicle ->delete();
    $vehicle>session()->flash('Success','vehicle Deleted Successfully.');
    return redirect()->route('vehicle.index');






 }





}
