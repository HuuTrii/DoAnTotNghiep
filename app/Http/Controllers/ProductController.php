<?php

namespace App\Http\Controllers;
use App\Exports\ProductsExport;
use App\Models\Billimport;
use App\Models\Detailimport;
use App\Models\Detailexport;
use App\Models\Catalog;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Unit;
use App\Models\Vendor;
use App\Models\Billexport;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected  $billimport = null;
    protected  $billexport = null;
    public function index(Request $request)
    {
        $vendors = Vendor::all();
        $catalogs = Catalog::all();
        $units = Unit::all();
        $promotions = Promotion::all();
        $billimport = $request->billimport??null;
        $billexport = $request->billexport??null;
        return view('page.products.products', compact('vendors', 'catalogs', 'units', 'promotions','billimport','billexport'));
    }

    public function get_catalog()
    {
        $Catalogs = Catalog::all();
        return view('page.products.products', compact('Catalogs'));
    }

    public function getprodata(Request $request)
    {
        $Product = Product::all();

        foreach ($Product as $key => $Pro){
            $Cate = Catalog::find($Product[$key]->id_cata);
            $Product[$key]->name_cata = $Cate->id_cata . "-".  $Cate->name_cata;

            $Promotion = Promotion::find($Product[$key]->id_promotion);
            $Product[$key]->name_promotion =   $Promotion->id_promotion . "-". $Promotion->code_promotion;

            $Vendor = Vendor::find($Product[$key]->id_vendor);
            $Product[$key]->name_vendor =  $Vendor->id_vendor . "-". $Vendor->name_vendor;

            $Unit = Unit::find($Product[$key]->id_unit);
            $Product[$key]->name_unit = $Unit->id_unit . "-".  $Unit->name_unit;
        }

        return Datatables::of( $Product)
            ->addColumn('action', function ($Product) use ($request) {
                $billimport = $request->billimport??null;
                $result= "<a href='" . route('productDestroy', $Product->id_pro) . "'>
                    <span class='badge badge-danger' style='padding: 1% 5%; margin-right:20px'> <i class='fa fa-trash'></i></span></a>
                    <a href='#' class='editbtn'> <span data-toggle='modal' data-target='#editmodal'
                    class='badge badge-success' style='padding: 1% 5%;'><i class='fa fa-edit'></i></span></a>";
                if( $billimport === 'billimport')
                    $result= "$result<a href='#' class='addSL'> <span data-toggle='modal' data-target='#modalSL'
                    class='badge badge-success' style='padding: 1% 5%;'><i class='fa fa-plus'></i></span></a>";
                else if( $billimport === 'billexport'){
                    $result= "$result<a href='#' class='exportSL'> <span data-toggle='modal' data-target='#modalexportSL'
                    class='badge badge-success' style='padding: 1% 5%;'><i class='fa fa-minus'></i></span></a>";}
                else $result = $result;
                return $result;
            })

            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('page.products.products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if ($request->has('images')) {
            $file = $request->file('images');
            if ($file->getClientOriginalExtension() == "jpg" || "png" || "jpeg") {
                $filename = $file->getClientOriginalName();
                $file->move('upload', $filename);
                $link = 'upload/' . $filename;
            } else {
                $link = '';
            }
        } else {
            $link = '';
        }
        $Products = new Product;
        $Products->name_pro = $request->input('name_pro');
        $Products->code_pro = $request->input('code_pro');
        $Products->id_cata = $request->input('id_cata');
        $Products->id_vendor = $request->input('id_vendor');
        $Products->id_promotion = $request->input('id_promotion');
        $Products->id_unit = $request->input('id_unit');
        $Products->images = $link;
        $Products->quantity = $request->input('quantity');
        $Products->price = $request->input('price');
        $Products->save();
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $id_pro)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function edit(Product $id_pro)
    {
        $Catalogs = Catalog::all();
        $Products = Product::find($id_pro)->first();
        return view('page.products.products', ['product' => $Products, 'catalog' => $Catalogs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $Products = Product::find($id);
        $Products->id_cata = $request->input('id_cata');
        $Products->id_unit = $request->input('id_unit');
        $Products->id_vendor = $request->input('id_vendor');
        $Products->id_promotion = $request->input('id_promotion');
        $Products->code_pro = $request->input('code_pro');
        $Products->name_pro = $request->input('name_pro');
        $Products->images = $request->input('images');
        $Products->price = $request->input('price');
        $Products->quantity = $request->input('quantity');
        $Products->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return Response
     */
    public function destroy($id)
    {
        $Products = Product::find($id);
        $Products->delete();
        return redirect('products');
    }

    /// import export search

    public function export()
    {
        return Excel::download(new ProductsExport, 'Product.xlsx');
    }

//    public function import_product(Request $request)
//    {
//        Excel::import(new ProductsImport(), $request->file('file_import'));
//        return back();
//    }

//    public function exportpdf()
//    {
//        $products = Product::all();
//        $pdf = PDF::loadView('page.pdf.imvoice', ['products1' => $products]);
//        return $pdf->stream('imvoice.pdf');
//
//    }
    public function exportpdf(Request $request)
    {
        $products = Billimport::Where('bill_imports.id_user',auth()->user()->id)->Where('vendors.id_vendor',$request->id)
            ->rightJoin('detail_imports', 'bill_imports.id_import', '=', 'detail_imports.id_import')
            ->leftJoin('products', 'detail_imports.id_pro', '=', 'products.id_pro')
            ->rightJoin('catalogs', 'products.id_cata', '=', 'catalogs.id_cata')
            ->rightJoin('vendors', 'products.id_vendor', '=', 'vendors.id_vendor')
            ->rightJoin('promotions', 'products.id_promotion', '=', 'promotions.id_promotion')
            ->select('bill_imports.id_user', 'bill_imports.name', 'bill_imports.id_import',
                'bill_imports.created_at',
                'detail_imports.id_import', 'detail_imports.quantity',
                'products.id_pro', 'products.name_pro','products.code_pro','products.price',
                'catalogs.id_cata','catalogs.name_cata',
                'vendors.id_vendor','vendors.name_vendor',
                'promotions.id_promotion','promotions.code_promotion'
                )
            ->get();
        $pdf = PDF::loadView('page.pdf.imvoiceimport', ['products1' => $products]);
        return $pdf->stream('imvoice.pdf');
    }
    public function exportpdfexport(Request $request)
    {
        $products = Billexport::Where('bill_exports.id_user',auth()->user()->id)->Where('vendors.id_vendor',$request->id)
            ->rightJoin('detail_exports', 'bill_exports.id_export', '=', 'detail_exports.id_export')
            ->leftJoin('products', 'detail_exports.id_pro', '=', 'products.id_pro')
            ->rightJoin('catalogs', 'products.id_cata', '=', 'catalogs.id_cata')
            ->rightJoin('vendors', 'products.id_vendor', '=', 'vendors.id_vendor')
            ->rightJoin('promotions', 'products.id_promotion', '=', 'promotions.id_promotion')
            ->select('bill_exports.id_user', 'bill_exports.name', 'bill_exports.id_export',
                'bill_exports.created_at',
                'detail_exports.id_export', 'detail_exports.quantity',
                'products.id_pro', 'products.name_pro','products.code_pro','products.price',
                'catalogs.id_cata','catalogs.name_cata',
                'vendors.id_vendor','vendors.name_vendor',
                'promotions.id_promotion','promotions.code_promotion'
            )
            ->get();
        $pdf = PDF::loadView('page.pdf.imvoiceexport', ['products1' => $products]);
        return $pdf->stream('imvoice.pdf');
    }

    public function exportpdfproducts(Request $request)
    {
        
        $Product = Product::Where('id_vendor',$request->id)
            ->get();

        foreach ($Product as $key => $Pro){
            $Cate = Catalog::find($Product[$key]->id_cata);
            $Product[$key]->name_cata =   $Cate->name_cata;

            $Promotion = Promotion::find($Product[$key]->id_promotion);
            $Product[$key]->name_promotion =  $Promotion->code_promotion;

            $Vendor = Vendor::find($Product[$key]->id_vendor);
            $Product[$key]->name_vendor =  $Vendor->name_vendor;

            $Unit = Unit::find($Product[$key]->id_unit);
            $Product[$key]->name_unit =  $Unit->name_unit;
        }

        $pdf = PDF::loadView('page.pdf.imvoiceexportproducts', ['products1' => $Product]);
        return $pdf->stream('imvoice.pdf');
    }
    public function search_product(Request $request)
    {
        $product = DB::table('products')->where('id_cata', 'like', '%' . $request->search . '%')
            ->orwhere('id_unit', 'like', '%' . $request->search . '%')
            ->orwhere('id_vendor', 'like', '%' . $request->search . '%')
            ->orwhere('id_promotion', 'like', '%' . $request->search . '%')
            ->orwhere('name_pro', 'like', '%' . $request->search . '%')
            ->orwhere('price', 'like', '%' . $request->search . '%')
            ->orwhere('quantity', 'like', '%' . $request->search . '%')
            ->orwhere('created_at', 'like', '%' . $request->search . '%')
            ->get();
        return view('page.products.products', compact('product'));
    }
    public function productsSL(Request $request){
        $product = Product::find($request->id);
        $billimport= Billimport::orderBy('id_import','DESC')->first();
        $detail = new Detailimport;
        $detail->id_pro = $request->id;
        $detail->quantity = $request->quantity;
        $detail->id_import = $billimport->id_import;
        $detail->save();
        $product->quantity = $product->quantity+$request->quantity;
        $product->save();

    }
    public function productsExportSL(Request $request){
        $product = Product::find($request->id);
        $billexport= Billexport::orderBy('id_export','DESC')->first();
        $detail = new Detailexport;
        $detail->id_pro = $request->id;
        $detail->quantity = $request->quantity;
        $detail->id_export = $billexport->id_export;
        $detail->save();
        $product->quantity = $product->quantity-$request->quantity;
        $product->save();

    }
}
