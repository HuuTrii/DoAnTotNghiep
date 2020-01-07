<?php

namespace App\Http\Controllers;

use App\Models\Billexport;
use Illuminate\Http\Request;

class DetailexportController extends Controller
{
    public function store(Request $request)
    {
        $BillExports = new Billexport;
        $BillExports->id_user = auth()->user()->id;
        $BillExports->name = auth()->user()->name;
        $BillExports->save();

        return view('products');
    }
}
