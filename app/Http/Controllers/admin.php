<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order ;
use Illuminate\Http\Request;
// use App\Http\Controllers\session;
use app\Models\Price;
use Session;
//use app\Models\Admin;

class admin extends Controller
{

    public function getdata()
    {
        $data = Order::all();

        return view('admin.admin-order', ['data' => $data]);

    }

    public function update(Request $request )
    {
        $button = $request->input('submit');

        if ($button == "delete") {
            $data_id = $request->input('radio');
            $data0 = Order::find($data_id);   // Offer::where('id','$offer_id') -> first();
            $data0->delete();
            return redirect('/admin-order');
        }

        elseif ($button == "save") {
//            $data_id = $request->input('price');
//            $data_id = $request->input('radio');


//            $price = new Price();
//            $price -> Price = $data_id;
//            return $price;
            return redirect('/admin-order');
        }

        elseif ($button == "edit") {
            $data_id = $request->input('radio');
            session::put('id',$data_id);
            return redirect('/edit-order');


             $file_extension = $request -> file -> getClientOriginalExtension();
             $file_name = time() . '.' . $file_extension;
             $path = 'C:\xampp\htdocs\pcb\public\grbl_files';
             $request -> file -> move($path,$file_name);
             $order = Order::where('userid', Auth::user()->id)->get();
             $order -> userid = Auth::user()->id;
    //         $size = $request->get('sizex') * $request->get('sizey');
    //         $order -> size =  $size;
                $order -> sizex = $request->input('sizex');
                $order -> sizey = $request->input('sizey');
                $order -> size = $request->get('sizex') * $request->get('sizey');
    //            $order -> size =  $size;

             $order -> quantity = $request->update('quantity');
             $order -> design_num = $request->input('design_num');
             $order -> layers = $request->input('layers');
             $order -> min_track = $request->input('min_track');
             $order -> min_hole_size = $request->input('min_hole_size');
             $order -> solder_mask = $request->input('solder_mask');
             $order -> silkscreen = $request->input('silkscreen');
             $order -> stensil = $request->input('stensil');

        }

}
}
