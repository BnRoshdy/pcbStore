<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Shipment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Price;
use Session;


class addorder extends Controller
{
    public function aview(){
        return view('Admin.order');
    }
    public function add(Request $request){

        $file_extension = $request -> file -> getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'C:\xampp\htdocs\pcb\public\grbl_files';
        $request -> file -> move($path,$file_name);
        $order = new Order();
        $order -> userid = 'admin';
        $size = $request->input('sizex') * $request->input('sizey');
        $order -> sizex =  $request->input('sizex');
        $order -> sizey =  $request->input('sizey');
        $order -> quantity = $request->input('quantity');
        $order -> design_num = $request->input('design_num');
        $order -> layers = $request->input('layers');
        $order -> min_track = $request->input('min_track');
        $order -> min_hole_size = $request->input('min_hole_size');
        $order -> solder_mask = $request->input('solder_mask');
        $order -> silkscreen = $request->input('silkscreen');
        $order -> stensil = $request->input('stensil');
        $order -> promo_code = "null";
        if ($request->input('stensil')=='yes')
            $s = $size*Price::latest()->value('stensil_price');
        else

            $s =0;
        $order -> price = ($size * Price::latest()->value('copper_price') * (float)$request->input('layers')*$request->input('quantity'))+ $s;
        $order -> status = "confirmed";
        $order -> file_name = $file_name;
        $date = new Carbon();
        $order -> created_at_mon =$date->month;
        $order -> created_at_year = $date->year-2000;
        $order ->save();
        $id = Order::where('userid','admin')->max('id');
        session::put('aid',$id);
        return redirect(route('admin.shipment'));
    }
    public function adds(Request $request){
        $Shipment = new Shipment();
        $Shipment-> userid = 'admin';
        $pcbid =  session::get('aid');
        $Shipment-> pcbid = $pcbid ;
        $Shipment-> name = $request->input('name');
        $Shipment-> address = $request->input('address');
        $Shipment-> num = $request->input('num');
        $Shipment->tracking_num = 'null';
        $Shipment-> status = "not shiped";
        $Shipment-> save();
        return redirect(route('admin.order'));
    }
}
