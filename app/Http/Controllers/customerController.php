<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\customer;
class customerController extends Controller
{
    public function index()
    {
        $customer = customer::orderBy('id','DESC')->Paginate(5);


        return view('customer.Indexcustomer',['customer' => $customer]);
    }
    public function add()
    {
        return view('customer.Addcustomer');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'Name' => 'required',
            'Contact' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'A_Contact' => 'required',
            'Status' => 'required',



        ]);

        //if ( $validator->passes() ) {
            //save data
        $customer = new customer();
        $customer->Name = $request->Name;
        
        $customer->Contact = $request->Contact;
        $customer->City = $request->City;
        $customer->Address = $request->Address;
        $customer->Status = $request->Status;
        $customer->A_Contact = $request->A_Contact;



        $customer->save();

        $request->session()->flash('Success','customer Added Successfully.');
        return redirect()->route('customer.index');


    } //else {
        //return
        //return redirect()->route('customer.add')->withErrors($validator);
   // }


        public function edit($id) 
        {
            $customer = customer::findOrfail($id);

                return view('customer.Edit',['customer'=> $customer]);

        }

        public function update($id, Request $request){
            $validator = Validator::make($request->all(),
            [
                'Name' => 'required',
                'Contact' => 'required',
                'City' => 'required',
                'Address' => 'required',
                'A_Contact' => 'required',


                'Status' => 'required',
            ]);
    
            //if ( $validator->passes() ) {
                //save data
            $customer = customer::find($id);
            $customer->Name = $request->Name;

            $customer->Contact = $request->Contact;
            $customer->A_Contact = $request->A_Contact;
            $customer->City = $request->City;
            $customer->Address = $request->Address;


    
            $customer->Status = $request->Status;
 




    
            $customer->save();
    
            $request->session()->flash('Success','customer Added Successfully.');
            return redirect()->route('customer.index');
    
    
        } //else {
            //return
            //return redirect()->route('customer.add')->withErrors($validator);
       // }

       public function destroy($id, Request $request){
        $customer = customer::findorFail($id);
        $customer ->delete();
        $request->session()->flash('Success','customer Deleted Successfully.');
        return redirect()->route('customer.index');

    
    
    
    
    
     }








}
