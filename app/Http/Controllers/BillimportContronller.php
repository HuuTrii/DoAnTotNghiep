<?php

namespace App\Http\Controllers;
use App\Models\Detailimport;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Catalog;
use App\Models\Unit;
use App\Models\Promotion;
use App\Models\Billimport;
use Illuminate\Http\Request;

class BillimportContronller extends Controller
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
        return view('page.billimport.billimport',compact('vendors','catalogs','units','promotions'));
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
         $BillImports = new Billimport;
         $BillImports->id_user = auth()->user()->id;
         $BillImports->name = auth()->user()->name;
         $BillImports->save();
        return redirect('products/billimport');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Billimport  $billimport
     * @return \Illuminate\Http\Response
     */
    public function show(Billimport $billimport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Billimport  $billimport
     * @return \Illuminate\Http\Response
     */
    public function edit(Billimport $billimport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Billimport  $billimport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Billimport $billimport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Billimport  $billimport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Billimport $billimport)
    {
        //
    }
}
