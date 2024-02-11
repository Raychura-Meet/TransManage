<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class DriverController extends Controller
{
    public function index()
    {
        $Driver = Driver::orderBy('id','DESC')->Paginate(5);


        return view('Driver.IndexDriver',['Driver' => $Driver]);
    }
    public function add()
    {
        return view('Driver.AddDriver');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'Name' => 'required',
            'Age' => 'required',
            'Contact' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'L_no' => 'required',
            'A_Contact' => 'required',
            'D_L' => 'required',
            'image' => 'required',
            'Status' => 'required',



        ]);

        //if ( $validator->passes() ) {
            //save data
        $Driver = new Driver();
        $Driver->Name = $request->Name;
        $Driver->Age = $request->Age;
        $Driver->Contact = $request->Contact;
        $Driver->City = $request->City;
        $Driver->Address = $request->Address;
        $Driver->L_no = $request->L_no;
        $Driver->Status = $request->Status;
        $Driver->A_Contact = $request->A_Contact;
        $Driver->Date = $request->Date;
            
        //image
        $request->image;
        $ext =  $request->image->getClientOriginalExtension();
        $newFileName=time().'.'.$ext;
        $request->image->move(public_path().'/uploads/image/',$newFileName);
        $Driver->image = $newFileName;

        //D_L
        $request->D_L;
        $ext =  $request->D_L->getClientOriginalExtension();
        $newFileName=time().'.'.$ext;
        $request->D_L->move(public_path().'/uploads/D_L/',$newFileName);
        $Driver->D_L = $newFileName; 



        $Driver->save();

        $request->session()->flash('Success','Driver Added Successfully.');
        return redirect()->route('Driver.index');


    } //else {
        //return
        //return redirect()->route('Driver.add')->withErrors($validator);
   // }


        public function edit($id) 
        {
            $Driver = Driver::findOrfail($id);

                return view('Driver.Edit',['Driver'=> $Driver]);

        }

        public function update($id, Request $request){
            $validator = Validator::make($request->all(),
            [
                'Name' => 'required',
                'Age' => 'required',
                'Contact' => 'required',
                'City' => 'required',
                'Address' => 'required',
                'L_no' => 'required',
                'A_Contact' => 'required',
                'D_L' => 'required',

                'Status' => 'required',
            ]);
    
            //if ( $validator->passes() ) {
                //save data
            $Driver = Driver::find($id);
            $Driver->Name = $request->Name;
            $Driver->Age = $request->Age;
            $Driver->Contact = $request->Contact;
            $Driver->A_Contact = $request->A_Contact;
            $Driver->City = $request->City;
            $Driver->Address = $request->Address;
            $Driver->L_no = $request->L_no;

            $Driver->Date = $request->Date;
            $Driver->Status = $request->Status;
 




    
            $Driver->save();
    
            $request->session()->flash('Success','Driver Added Successfully.');
            return redirect()->route('Driver.index');
    
    
        } //else {
            //return
            //return redirect()->route('Driver.add')->withErrors($validator);
       // }

       public function destroy($id, Request $request){
        $Driver = Driver::findorFail($id);
        $Driver ->delete();
        $request->session()->flash('Success','Driver Deleted Successfully.');
        return redirect()->route('Driver.index');

    
    
    
    
    
     }








       
        }

















    






