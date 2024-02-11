<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\route;
class RoutesController extends Controller
{
    public function index()
    {

        $Routes = Route::orderBy('id','DESC')->Paginate(5);

        return view('Routes.IndexRoutes',['Routes' => $Routes]);
    }
    public function add()
    {
        return view('Routes.AddRoutes');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'Name' => 'required',
        ]);
            $Routes = new route();
            $Routes->Name = $request->Name;
            $Routes->save();
            $request->session()->flash('Success','Routes Added Successfully.');
            return redirect()->route('Routes.index');
        }
       public function edit($id) 
       {
           $Routes = route::findOrfail($id);
               return view('Routes.Edit',['Routes'=> $Routes]);
       }
       public function update($id, Request $request){
           $validator = Validator::make($request->all(),
           [
            'Name' => 'required',
           ]);
               $Routes = route::find($id);
               $Routes->Name = $request->Name;
               $Routes->save();
           $request->session()->flash('Success','vehicle Added Successfully.');
           return redirect()->route('vehicle.index');
       }
      public function destroy($id, Request $request){
        $Routes = Route::findorFail($id);
        $Routes ->delete();
        $request->session()->flash('Success','Routes Deleted Successfully.');
        return redirect()->route('Routes.index');
    
     }
    }