<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('page.products.products');
});
Route::get('/unit', function () {
    return view('page.unit.unit');
});
Route::get('/products', function () {
    return view('page.products.products');
});
Route::get('/vendor', function () {
    return view('page.vendor.vendor');
});

// Route::get('/login', function () {
//     return view('page.login.login');
// });

Route::get('register', function () {
    return view('page.register.register');
});
Route::get('login1', function () {
    return view('page.login.login');
});

Route::get('/register', function () {
    return view('page.register.register');
});
Route::get('promotion', function () {
    return view('page.promotion.promotion');
});
Route::get('/products_type', function () {
    return view('page.products_type.products_type');
});
Route::get('/users', function () {
    return view('page.users.users');
});
Route::get('/', function () {
    return view('page.home');
});



//// them xoa sua import export search

//Route::get('display', 'UserController@index')->name('userIndex');
//Route::get('insert', 'UserController@get_role')->name('userCreate');
//Route::post('store', 'UserController@store')->name('userStore');
//Route::get('edit/{id_user}', 'UserController@edit')->name('userEdit');
//Route::post('save/{id_user}', 'UserController@update')->name('userUpdate');
//Route::get('delete/{id_user}', 'UserController@destroy')->name('userDestroy');
////Route::get('users/export', 'UsersController@export');
//Route::post('import', 'UserController@import')->name('import');
//Route::get('search', 'UserController@search')->name('search');

// catalog


// Route::get('insert_cata', 'CatalogController@create')->name('catalogCreate');  //  thêm mới
// Route::post('store_cata', 'CatalogController@store')->name('catalogStore');  //  lưu
// Route::get( 'edit_cata/{id_cata}', 'CatalogController@edit')->name('catalogEdit');  //  update
// Route::put( 'save_cata/{id}', 'CatalogController@update')->name('catalogUpdate');  //  lưu cập nhật
// Route::post('cataadd', 'CatalogController@them'); // store
// Route::put('editCata/{id}','CatalogController@up'); // update

//Route::get('products_type', 'CatalogController@index')->name('catalogIndex');  // show
//Route::get('delete_cata/{id_cata}', 'CatalogController@destroy')->name('catalogDestroy');  //  xóa
//Route::get('products_type/export', 'CatalogController@export_catalog')->name('export_catalog');  //  export
//Route::post('import_cata', 'CatalogController@import_catalog')->name('import_catalog');  //  import
//Route::get('search_cata', 'CatalogController@search_catalog')->name('search_catalog');  //  search
//Route::post('cataadd', 'CatalogController@store'); // store insert
//Route::put('editCata/{id}', 'CatalogController@update'); // update
//Route::get('catalog/export', 'CatalogController@export');
//Route::post('importCatalog', 'CatalogController@import')->name('importCatalog');


// products
Route::get('display', 'UserController@index')->name('userIndex');
Route::get('insert_pro', 'ProductController@get_catalog')->name('proCreate');
Route::post('store', 'UserController@store')->name('userStore');
Route::get('edit/{id_user}', 'UserController@edit')->name('userEdit');
Route::post('save/{id_user}', 'UserController@update')->name('userUpdate');
Route::get('delete/{id_user}', 'UserController@destroy')->name('userDestroy');
//Route::get('users/export', 'UserController@export');
Route::post('import', 'UserController@import')->name('import');
Route::get('search', 'UserController@search')->name('search');

Route::get('products', 'ProductController@index')->name('productIndex');  // show
Route::get('delete_pro/{id_pro}', 'ProductController@destroy')->name('productDestroy');  //  xóa
Route::get('products/export', 'ProductController@export_product')->name('export_product');  //  export
Route::post('import_pro', 'ProductController@import_product')->name('import_product');  //  import
Route::get('search_pro', 'ProductController@search_product')->name('search_product');  //  search
Route::post('productsadd', 'ProductController@store'); // store insert
Route::post('productsSL/{id}', 'ProductController@productsSL'); // store insert
Route::get('products/{billimport}', 'ProductController@index');  // show

Route::post('productsExportSL/{id}', 'ProductController@productsExportSL'); // store insert
Route::get('products/{billexport}', 'ProductController@index');  // show

Route::put('editProducts/{id}', 'ProductController@update'); // update
Route::get('product/export', 'ProductController@export');
Route::get('imvoicebillimport/{id}','ProductController@exportpdf');

Route::get('imvoiceexport/{id}','ProductController@exportpdfexport');
Route::get('imvoiceexportproducts/{id}','ProductController@exportpdfproducts');



// unit

//Route::get('unit', 'UnitController@index')->name('unitIndex');  // show
//Route::get('delete_unit/{id_unit}', 'UnitController@destroy')->name('unitDestroy');  //  xóa
//Route::get('unit/export', 'UnitController@export_unit')->name('export_unit');  //  export
//Route::post('import_unit', 'UnitController@import_unit')->name('import_unit');  //  import
//Route::get('search_unit', 'UnitController@search_unit')->name('search_unit');  //  search
//Route::post('unitadd', 'UnitController@store'); // store insert
//Route::put('editUnit/{id}', 'UnitController@update'); // update
//Route::get('unit/export', 'UnitController@export');
//Route::post('importUnit', 'UnitController@import')->name('importUnit');


// vendor


//Route::get('vendor', 'VendorController@index')->name('vendorIndex');  // show
//Route::get('delete_vendor/{id_vendor}', 'VendorController@destroy')->name('vendorDestroy');  //  xóa
//Route::get('vendor/export', 'VendorController@export_vendor')->name('export_vendor');  //  export
//Route::post('import_vendor', 'VendorController@import_vendor')->name('import_vendor');  //  import
//Route::get('search_vendor', 'VendorController@search_vendor')->name('search_vendor');  //  search
//Route::post('vendoradd', 'VendorController@store'); // store insert
//Route::put('editVendor/{id}', 'VendorController@update'); // update
//Route::get('vendor/export', 'VendorController@export');
//Route::post('importVendor', 'VendorController@import')->name('importVendor');

// promotion


//Route::get('promotion', 'PromotionController@index')->name('promotionIndex');  // show
//Route::get('delete_promotion/{id_promotion}', 'PromotionController@destroy')->name('promotionDestroy');  //  xóa
//Route::get('promotion/export', 'PromotionController@export_promotion')->name('export_promotion');  //  export
//Route::post('import_promotion', 'PromotionController@import_promotion')->name('import_promotion');  //  import
//Route::get('search_promotion', 'PromotionController@search_promotion')->name('search_promotion');  //  search
//Route::post('promotionadd', 'PromotionController@store'); // store insert
//Route::put('editPromotion/{id}', 'PromotionController@update'); // update
//Route::get('promotion/export', 'PromotionController@export');
//Route::post('importPromotion', 'PromotionController@import')->name('importPromotion');


//billimport
Route::get('billimport', 'BillimportContronller@index');
Route::post('addbill', 'BillimportContronller@store');

//billexport
Route::get('billexport', 'BillexportContronller@index');
Route::post('addbillexport', 'BillexportContronller@store');
//chart

Route::get('tongquan', 'tongquanController@index');
///
Route::get('/reset', function () {
    return view('page.reset_password.reset_password');
});
Route::get('/datatable', function () {
    return view('page.products_type.products_type');
});
Route::get('/page.loi.error', function () {
    return view('page.loi.error');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/datatable/listunit', 'UnitController@getunitdata');
Route::get('/datatable/listpromotion', 'PromotionController@getpromotiondata');
Route::get('/datatable/listvendor', 'VendorController@getvendordata');
Route::get('/datatable/listcatalog', 'CatalogController@getprotypedata');
Route::get('/datatable/listproducts', 'ProductController@getprodata');
Route::get('/datatable/listproducts/{billimport}', 'ProductController@getprodata');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::prefix('users')->group(function () {
        Route::get('/', 'UsersController@index')->middleware('checkadmin');
        Route::post('/useradd', 'UsersController@store')->middleware('checkadmin'); // store insert
        Route::put('/edit/{id}', 'UsersController@update')->middleware('checkadmin'); // update
        Route::get('/delete_user/{id}', 'UsersController@destroy')->name('delete')->middleware('checkadmin');
        Route::get('export/name', 'UsersController@export');
    });
    Route::prefix('role')->group(function () {
        Route::get('/', 'RoleController@index')->middleware('checkadmin');
        Route::post('/roleadd', 'RoleController@store')->middleware('checkadmin'); // store insert
        Route::put('/edit/{id}', 'RoleController@update')->middleware('checkadmin'); // update
        Route::get('/delete_role/{id}', 'RoleController@destroy')->name('roledestroy')->middleware('checkadmin');
    });
    Route::prefix('promotion')->group(function () {
        Route::get('/', 'PromotionController@index')->name('promotionIndex')->middleware('checkstocker');  // show
        Route::get('/delete_promotion/{id_promotion}', 'PromotionController@destroy')->name('promotionDestroy')->middleware('checkstocker');  //  xóa
        Route::get('/promotion/export', 'PromotionController@export_promotion')->name('export_promotion')->middleware('checkstocker' );  //  export
        Route::post('/import_promotion', 'PromotionController@import_promotion')->name('import_promotion')->middleware('checkstocker' );  //  import
        Route::get('/search_promotion', 'PromotionController@search_promotion')->name('search_promotion')->middleware('checkstocker');  //  search
        Route::post('/promotionadd', 'PromotionController@store')->middleware('checkstocker' ); // store insert
        Route::put('/editPromotion/{id}', 'PromotionController@update')->middleware('checkstocker' ); // update
        Route::get('/promotion/export', 'PromotionController@export')->middleware('checkstocker');
        Route::post('/importPromotion', 'PromotionController@import')->name('importPromotion')->middleware('checkstocker');
    });
    Route::prefix('unit')->group(function () {
        Route::get('/', 'UnitController@index')->name('unitIndex')->middleware('checkstocker');  // show
        Route::get('/delete_unit/{id_unit}', 'UnitController@destroy')->name('unitDestroy')->middleware('checkstocker');  //  xóa
        Route::get('/unit/export', 'UnitController@export_unit')->name('export_unit')->middleware('checkstocker');  //  export
        Route::post('/import_unit', 'UnitController@import_unit')->name('import_unit')->middleware('checkstocker');  //  import
        Route::get('/search_unit', 'UnitController@search_unit')->name('search_unit')->middleware('checkstocker');  //  search
        Route::post('/unitadd', 'UnitController@store')->middleware('checkstocker'); // store insert
        Route::put('/editUnit/{id}', 'UnitController@update')->middleware('checkstocker'); // update
        Route::get('/unit/export', 'UnitController@export')->middleware('checkstocker');
        Route::post('/importUnit', 'UnitController@import')->name('importUnit')->middleware('checkstocker');
    });
    Route::prefix('vendor')->group(function () {
        Route::get('/', 'VendorController@index')->name('vendorIndex')->middleware('checkstocker');  // show
        Route::get('/delete_vendor/{id_vendor}', 'VendorController@destroy')->name('vendorDestroy')->middleware('checkstocker');  //  xóa
        Route::get('/vendor/export', 'VendorController@export_vendor')->name('export_vendor')->middleware('checkstocker');  //  export
        Route::post('/import_vendor', 'VendorController@import_vendor')->name('import_vendor')->middleware('checkstocker');  //  import
        Route::get('/search_vendor', 'VendorController@search_vendor')->name('search_vendor')->middleware('checkstocker');  //  search
        Route::post('/vendoradd', 'VendorController@store')->middleware('checkstocker'); // store insert
        Route::put('/editVendor/{id}', 'VendorController@update')->middleware('checkstocker'); // update
        Route::get('/vendor/export', 'VendorController@export')->middleware('checkstocker');
        Route::post('/importVendor', 'VendorController@import')->name('importVendor')->middleware('checkstocker');
    });
    Route::prefix('products_type')->group(function () {
        Route::get('/', 'CatalogController@index')->name('catalogIndex')->middleware('checkstocker');  // show
        Route::get('/delete_cata/{id_cata}', 'CatalogController@destroy')->name('catalogDestroy')->middleware('checkstocker');  //  xóa
        Route::get('/products_type/export', 'CatalogController@export_catalog')->name('export_catalog')->middleware('checkstocker');  //  export
        Route::post('/import_cata', 'CatalogController@import_catalog')->name('import_catalog')->middleware('checkstocker');  //  import
        Route::get('/search_cata', 'CatalogController@search_catalog')->name('search_catalog')->middleware('checkstocker');  //  search
        Route::post('/cataadd', 'CatalogController@store')->middleware('checkstocker'); // store insert
        Route::put('/editCata/{id}', 'CatalogController@update')->middleware('checkstocker'); // update
        Route::get('/catalog/export', 'CatalogController@export')->middleware('checkstocker');
        Route::post('/importCatalog', 'CatalogController@import')->name('importCatalog')->middleware('checkstocker');
    });
      Route::get('chart', 'statisticalController@index')->middleware('checkcounter');
    //billimport
        Route::get('billimport', 'BillimportContronller@index')->middleware('checkstocker');
        Route::post('addbill', 'BillimportContronller@store')->middleware('checkstocker');
    //billexport
    Route::get('billexport', 'BillexportContronller@index')->middleware('checkstocker');
    Route::post('addbillexport', 'BillexportContronller@store')->middleware('checkstocker');
});

