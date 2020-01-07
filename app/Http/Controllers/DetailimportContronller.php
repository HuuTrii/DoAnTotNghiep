<?php

namespace App\Http\Controllers;

use App\Models\Billimport;
use App\Models\Detailimport;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailimportContronller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        return view('products');

        $Products = new Product;
        $Products->name_pro = $request->input('name_pro');
        $Products->code_pro = $request->input('code_pro');
        $Products->id_cata = $request->input('id_cata');
        $Products->id_vendor = $request->input('id_vendor');
        $Products->id_promotion = $request->input('id_promotion');
        $Products->id_unit = $request->input('id_unit');
        $Products->images = $request->input('images');
        $Products->quantity = $request->input('quantity');
        $Products->price = $request->input('price');
        $Products->save();

        $DetailImports = new Detailimport;
        $DetailImports->id_import = $BillImports->id_import;
        $DetailImports->id_pro = $Products->id_pro;
        $DetailImports->quantity = $Products->quantity;
        $DetailImports->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detailimport  $detailimport
     * @return \Illuminate\Http\Response
     */
    public function show(Detailimport $detailimport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detailimport  $detailimport
     * @return \Illuminate\Http\Response
     */
    public function edit(Detailimport $detailimport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detailimport  $detailimport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detailimport $detailimport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detailimport  $detailimport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detailimport $detailimport)
    {
        //
    }
}
