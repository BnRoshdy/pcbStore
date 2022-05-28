<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order ;
use Session;
class cart extends Controller
{
    public function getdata()
    {
        if(Auth::check()) {


            $data = Order::where('userid', Auth::user()->id)->get();

            return view('cart', ['data' => $data]);
        }
        else
            return redirect('/login');
    }
    public function editOrder(Request $request)
    {
        $button = $request->input('submit');
        if ($button == "delete") {
            $data_id = $request->input('radio');
            $data0 = Order::find($data_id);
            $data0->delete();
            return redirect('/cart');
        }
        elseif ($button == "check out") {
            $data_id = $request->input('radio');
            session::put('id',$data_id);
            return redirect('/checkout');
        }
    }
}
