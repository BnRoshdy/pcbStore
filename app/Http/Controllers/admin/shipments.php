<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Session;

class shipments extends Controller{
    public function getdata(){
        $data = Shipment::all();
        return view('admin.admin-shipment')->with('data',$data);
    }
    public function updatex(Request $request)
    {
        $button = $request->input('submit');
        if ($button == "Delete") {
            $data_id = $request->input('radio');
            $data0 = Shipment::find($data_id);   // Offer::where('id','$offer_id') -> first();
            $data0->delete();
            return redirect(route('admin.ashipment'));
        }
        elseif ($button == "Add") {
            $s = new Shipment;
            $data_id = $request->input('radio');
            Shipment::where('id', $data_id )->update(array( 'status' => 'shiped' , 'tracking_num'=>$request->input('tracking')));
            $s->update();
            return redirect(route('admin.ashipment'));
        }
        elseif ($button == "Edit") {
            $sid = $request->input('radio');
            session::put('sid',$sid);
            return redirect(route('admin.editshipment'));
        }
    }
}
