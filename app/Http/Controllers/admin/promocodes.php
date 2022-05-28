<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Promocode;
use Illuminate\Http\Request;
use Session;
class promocodes extends Controller{
    public function getdata(){
        $data = Promocode::all();
        return view('admin.admin-promocode',[])->with('datax',$data);
    }
    public function update(Request $request)
    {
        $p = new Promocode;
        $button = $request->input('submit');
        if ($button == 'Add') {
            $p->name = $request->input('name');
            $p->num = $request->input('quantity');
            $p->used = 0;
            $p->value = $request->input('dis');
            $p->max = $request->input('max');
            $p->save();

            return redirect(route('admin.promocode'));
        }
        elseif ($button == "Delete") {
            $data_id = $request->input('radio');
            $data0 = Promocode::find($data_id);   // Offer::where('id','$offer_id') -> first();
            $data0->delete();
            return redirect(route('admin.promocode'));
        }
        elseif($button == 'Edit'){
            $data_id = $request->input('radio');
            Session::put('promoid',$data_id);
            Session::put('flage',1);
            $promo = Promocode::where('id',$data_id)->get();
            Session::put('datas',$promo);
            return redirect(route('admin.promocode'));
            }
        elseif ($button == 'Save'){
            $id = session::get('promoid');
            $s = new Promocode();
            Promocode::where('id', $id )->update(array('name'=>$request->input('name'),'value'=>$request->input('dis'),
                'num'=>$request->input('quantity'),'max'=>$request->input('max')));
            $s->update();
            Session::put('flage',0);
            return redirect(route('admin.promocode'));
        }

    }
}
