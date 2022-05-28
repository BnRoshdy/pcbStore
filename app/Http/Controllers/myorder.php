<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order ;
use App\Models\Shipment;
class myorder extends Controller
{
    public function getdata()
    {
        if(Auth::check()) {
            $s = Shipment::where('userid', Auth::user()->id)->get();
            $data = Order::where('userid', Auth::user()->id)->get();
            if ($this->ee($s,'tracking_num')=='null')
                $x = 'not shiped yet';
            else
                $x = $this->ee($s,'tracking_num');
            return view('my_order')->with('data', $data)->with('tracking',$x);
        }
        else
            return redirect('/login');
    }
    private function ee($qx,$x)
    {
        foreach ($qx as $h)
            return $h->$x;
    }

}
