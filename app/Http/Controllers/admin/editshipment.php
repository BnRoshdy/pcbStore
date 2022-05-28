<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Session;
class editshipment extends Controller{
    public function getdata (){
        $id = session::get('sid');

        $s=Shipment::where('id',$id)->get();
        return view('admin.shipping')->with('s',$s) ;
    }
    public function update(Request $request){
        $id = session::get('sid');
        $s = new Shipment;
       Shipment::where('id', $id )->update(array('name'=>$request->input('name'),'address'=>$request->input('address'),
            'num'=>$request->input('num'),'tracking_num'=>$request->input('tracking'),'status'=>$request->input('status')));
         $s->update();
           return redirect(route('admin.ashipment'));

    }
}
