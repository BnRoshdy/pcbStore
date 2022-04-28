<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order ;
use Carbon\Carbon;

class orders extends Controller
{
    public function add(Request $request){
        $file_extension = $request -> file -> getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'C:\xampp\htdocs\pcb\public\grbl_files';
        $request -> file -> move($path,$file_name);
        $order = new Order();
        $order -> userid = Auth::user()->id;
        $order -> sizex =  $request->input('sizex');
        $order -> sizey =  $request->input('sizey');
//        $size = $request->input('sizex') * $request->input('sizey');

        $order -> quantity = $request->input('quantity');
        $order -> design_num = $request->input('design_num');
        $order -> layers = $request->input('layers');
        $order -> min_track = $request->input('min_track');
        $order -> min_hole_size = $request->input('min_hole_size');
        $order -> solder_mask = $request->input('solder_mask');
        $order -> silkscreen = $request->input('silkscreen');
        $order -> stensil = $request->input('stensil');
        $order -> price = 5 * 5 ;
        $order -> status = "not confirmed";
        $order -> file_name = $file_name;
        $date = new Carbon();
        $order -> created_at = $date->today()->format('l')."/".$date->day."/".$date->month."/".$date->year-2000;
        $order ->save();
    return redirect("/");
}
}
