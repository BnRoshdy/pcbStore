<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Price;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Promocode;

class orders extends Controller
{
    public function add(Request $request)
    {
        $file_extension = $request->file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'C:\xampp\htdocs\pcb\public\grbl_files';
        $request->file->move($path, $file_name);
        $order = new Order();
        $order->userid = Auth::user()->id;
        $size = $request->input('sizex') * $request->input('sizey');
        $order->sizex = $request->input('sizex');
        $order->sizey = $request->input('sizey');
        $order->quantity = $request->input('quantity');
        $order->design_num = $request->input('design_num');
        $order->layers = $request->input('layers');
        $order->min_track = $request->input('min_track');
        $order->min_hole_size = $request->input('min_hole_size');
        $order->solder_mask = $request->input('solder_mask');
        $order->silkscreen = $request->input('silkscreen');
        $order->stensil = $request->input('stensil');
        if ($request->input('stensil') == 'yes')
            $s = $size * Price::latest()->value('stensil_price');
        else
            $s = 0;
        $c = ($size * Price::latest()->value('copper_price') * (float)$request->input('layers') * $request->input('quantity')) + $s;
        $f = $c - $this->cal($request->input('promo'),$c) ;
        $order->price = $f;
        $order->status = "not confirmed";
        $order->file_name = $file_name;
        if($request->input('promo')==null)
            $w = 'null';
        else
            $w = $request->input('promo');
        $order->promo_code = $w;
        $date = new Carbon();
        $order->created_at_mon = $date->month;
        $order->created_at_year = $date->year - 2000;
        $order->save();
        return redirect("/");
       // if (Order::where('userid',Auth::user()->id)->where('promo_code',$request->input('promo'))->first()=== null)
       // return 1;
        //else
          //  return Order::where('userid',Auth::user()->id)->where('promo_code',$request->input('promo'))->get();

    }

    private function cal($promo,$p)
    {
        if (Promocode::where('name', $promo)->exists() && Order::where('userid',Auth::user()->id)->where('promo_code',$promo)->first()=== null) {

            if (str_contains($promo, 'first') !== false) {
                $num = sizeof(Order::where('userid', Auth::user()->id)->get());
                if ($num == 0) {

                    $max = $this->ee(Promocode::select('max')->where('name', $promo)->get(), 'max');
                    $dis = $this->ee(Promocode::select('value')->where('name', $promo)->get(), 'value') / 100;
                    $sum = $p * $dis;

                    if ($sum <= $max)
                        return $sum;
                    else
                        return $max;
                }
                else
                    return 0;
            } elseif (str_contains($promo, 'second') !== false) {
                $num = sizeof(Order::where('userid', Auth::user()->id)->get());
                if ($num == 1) {
                    $max = $this->ee(Promocode::select('max')->where('name', $promo)->get(), 'max');
                    $dis = $this->ee(Promocode::select('value')->where('name', $promo)->get(), 'value') / 100;
                    $sum = $p * $dis;
                    if ($sum <= $max)
                        return $sum;
                    else
                        return $max;
                } else
                    return 0;
            } else {
                $used = $this->ee(Promocode::select('used')->where('name', $promo)->get(), 'used');
                $num  = $this->ee(Promocode::select('num')->where('name', $promo)->get(), 'num');
                if ($used < $num) {
                    $v = new Promocode;
                    Promocode::where('name', $promo )->update(array('used'=>$used+1));
                    $v->update();
                    $max = $this->ee(Promocode::select('max')->where('name', $promo)->get(), 'max');
                    $dis = $this->ee(Promocode::select('value')->where('name', $promo)->get(), 'value') / 100;
                    $sum = $p * $dis;
                    if ($sum <= $max)
                        return $sum;
                    else
                        return $max;
                }
                else
                    return 0;
            }
        }
        else
            return 0;
    }
    private function ee($qx,$x){
        foreach ($qx as $h)
            return $h->$x;
    }
}
