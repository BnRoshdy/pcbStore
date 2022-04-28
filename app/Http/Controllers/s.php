<?php

namespace App\Http\Controllers;

use App\Models\Promocode;
use Illuminate\Http\Request;

class s extends Controller
{
    public function getdata()
    {
//        $data = Promocode::all();

//        return view('admin.admin-promocode', ['data' => $data]);
        return 'good';
    }
}
