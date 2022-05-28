<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Session;

class editorder extends Controller
{
    public function getdata()
    {
        $pcbid =  session::get('id');
        $data = Order::where('id', $pcbid)->get();

        return view('admin.edit-order', ['data' => $data]);
    }

    public function edit(Request $request)
    {
        $pcbid =  session::get('id');
        $order = new Order();
        $size = $request->get('sizex') * $request->get('sizey');
        Order::where('id', $pcbid )->update(array( 'sizex' => $request->input('sizex') ,'sizey' => $request->input('sizey'),
            'quantity' => $request -> input('quantity'),
            'design_num' => $request -> input('design_num'),
            'layers' => $request -> input('layers'),
            'min_track' => $request -> input('min_track'),
            'min_hole_size' => $request -> input('min_hole_size'),
            'solder_mask' => $request -> input('solder_mask'),
            'silkscreen' => $request -> input('silkscreen'),
            'stensil' => $request -> input('stensil'),
            'price' => $size * 5 * $request->input('quantity')
        ));
        $order->update();
        return redirect(route('admin.order'));
    }


}
