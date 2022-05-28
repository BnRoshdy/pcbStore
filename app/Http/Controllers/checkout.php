<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Shipment;
use App\Models\Payment_details;
use App\Models\Order;
use Session;

class checkout extends Controller
{
    public function add(Request $request){

        $Payment = new Payment_details();
        $Payment-> userid = Auth::user()->id;
        $Payment-> card_num = $request->input('cardnum');
        $Payment-> ex_data = $request->input('month')."/".$request->input('year');
        $Payment-> ccv = $request->input('ccv');
        $Shipment = new Shipment();
        $Shipment-> userid = Auth::user()->id;
        $pcbid =  session::get('id');
        $Shipment-> pcbid = $pcbid ;
        $Shipment-> name = $request->input('name');
        $Shipment-> address = $request->input('address');
        $Shipment-> num = $request->input('num');
        $Shipment->tracking_num = 'null';
        $Shipment-> status = "not shiped";
        $order = new Order();
        Order::where('id', $pcbid )->update(array('status' => 'confirmed'));
        $order-> update();
        $Payment-> save();
        $Shipment-> save();
        return redirect('/');

    }
}
