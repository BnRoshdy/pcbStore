<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;

class shipments extends Controller
{

    public function getdata()
    {
        $data = Shipment::all();

        return view('admin.admin-shipment', ['data' => $data]);
    }

}
