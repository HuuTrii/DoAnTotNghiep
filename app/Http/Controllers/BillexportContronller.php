<?php

namespace App\Http\Controllers;

use App\Models\Billexport;
use App\Models\Catalog;
use App\Models\Promotion;
use App\Models\Unit;
use App\Models\Vendor;
use Illuminate\Http\Request;

class BillexportContronller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors = Vendor::all();
        $catalogs = Catalog::all();
        $units = Unit::all();
        $promotions = Promotion::all();
        return view('page.billexport.billexport',compact('vendors','catalogs','units','promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $BillImports = new Billexport;
        $BillImports->id_user = auth()->user()->id;
        $BillImports->name = auth()->user()->name;
        $BillImports->save();
        return redirect('products/billexport');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Billexport  $billexport
     * @return \Illuminate\Http\Response
     */
    public function show(Billexport $billexport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Billexport  $billexport
     * @return \Illuminate\Http\Response
     */
    public function edit(Billexport $billexport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Billexport  $billexport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billexport $billexport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Billexport  $billexport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billexport $billexport)
    {
        //
    }
}
