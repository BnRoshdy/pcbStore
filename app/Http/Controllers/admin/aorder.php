<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Price;
use Session;

class aorder extends Controller
{

    public function getdata()
    {
        $data = Order::all();
        $cp =  Price::latest()->value('copper_price');
        $sp =  Price::latest()->value('stensil_price');
        return view('admin.admin-order')->with('data',$data)->with('cprice', $cp)->with('sprice', $sp);
    }


    public function update(Request $request )
    {
        $button = $request->input('submit');
        if ($button == "Delete") {
            $data_id = $request->input('radio');
            $data0 = Order::find($data_id);   // Offer::where('id','$offer_id') -> first();
            $data0->delete();
            return redirect(route('admin.order'));
        } elseif ($button == "Edit") {
            $data_id = $request->input('radio');
            session::put('id', $data_id);
            return redirect(route('admin.edito'));
        }
        elseif ($button == "Save"){
            $price = new Price;
            $price-> copper_price = $request->input('copperprice');
            $price-> stensil_price = $request->input('stensilprice');
            $price->save();
           return redirect(route('admin.order'));
        }
        elseif ($button == "Add"){
            return redirect(route('admin.addorder'));
        }
    }
}
