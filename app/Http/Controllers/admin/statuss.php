<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;

class statuss extends Controller
{
    public function st() {
       $date = new Carbon();
        $cons = array(['created_at_mon', '=', $date->month],
            ['created_at_year', '=', $date->year - 2000]
           ,['status', '=', 'confirmed']);
            $monthlys =$this->dwcs('price',$cons );
            $monthlyo = sizeof($this->dwcg('price',$cons ));

            $monthlyu = sizeof(User::select('id',)->whereMonth('created_at', Carbon::now()->month)
                ->whereyear('created_at', Carbon::now())->get());

            return view('admin.status')->with('visitor',json_encode($this->yd()))->with('datas' ,$monthlys)->with('datao',$monthlyo)->with('datau',$monthlyu) ;


    }
    private function dwcs($table,$s=array()){
        $record = Order::select($table)
            ->where($s)->sum($table);
            return $record ;
    }
    private function dwcg($table,$s=array()){
        $record = Order::select($table)
            ->where($s)->get();
        return $record ;
    }
    private function as($g){
        $date = new Carbon();
        $cons = array(['created_at_mon', '=', $g],
            ['created_at_year', '=', $date->year - 2000]
        ,['status', '=', 'confirmed']);
        return $cons ;
    }
    private function yd(){
        for ($f=0;$f<=3;$f++){
            switch ($f) {
                case 0:

                    $z[0][$f] = 'Year'." ".Carbon::now()->format('Y');
                    break;
                case 1 :
                    $z[0][$f] = 'Users';
                    break;
                case 2:
                    $z[0][$f] = 'Sales';
                    break;
                case 3:
                    $z[0][$f] = 'Orders';
                    break;
            }}
        for($i=1 ;$i<=12; $i++){
            for($x=0;$x<=3;$x++){
                switch ($x) {
                    case 0:
                        $z[$i][$x] = date('F', mktime(0, 0, 0, $i, 1));
                        break;
                    case 1:
                        $z[$i][$x] =  sizeof(User::select('id',)->whereMonth('created_at', Carbon::createFromFormat('d-m-Y', "1-$i-2021")->month)
                        ->whereyear('created_at', Carbon::now())->get());
                        break;
                    case 2:
                        $z[$i][$x] = (int)$this->dwcs('price', $this->as($i));
                        break;
                    case 3;
                        $z[$i][$x] =  sizeof($this->dwcg('price', $this->as($i)));
                        break;
                }
            }
        }
        return $z ;
    }
}
