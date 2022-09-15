<?php

namespace App\Http\Controllers\Warehousemapro\Inventory;

use App\Models\Rol;
use App\Models\User;
use App\Models\Imaqsize;
use App\Models\Imaqbrand;
use App\Models\Inventory;
use App\Models\Imaqumedida;
use App\Models\Imaqcategory;
use App\Models\Imaqdivision;
use App\Models\Imaqprovider;
use Illuminate\Http\Request;
use App\Models\Imaqlevelarea;
use App\Models\Imaqproductsat;
use App\Models\Imaqsatunidadkey;
use App\Models\Imaqtypematerial;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.warehousemapro.inventory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data               = (object)[];
        $data->division     = Imaqdivision::all();
        // $data->category     = Imaqcategory::all();
        $data->category     = Imaqcategory::all()->where('division_id',1);
        $data->levelarea    = Imaqlevelarea::all()->where('division_id',3);
        $data->user         = User::all();
        $data->brand        = Imaqbrand::all();
        $data->umedida      = Imaqumedida::all();
        $data->provider     = Imaqprovider::with('provider')->get();
        $data->productsat   = Imaqproductsat::all();
        $data->typematerial = Imaqtypematerial::all();
        $data->satunidadkey = Imaqsatunidadkey::all();
        $data->size         = Imaqsize::all();
        return view('admin.warehousemapro.inventory.create', compact('data'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $rules = [
            'name_product_inventory'        => ['required', 'string', 'max:255'],
            // 'stock_inventory'               => ['string'],
            'division_id'                   => ['required'],
        ];
        $messages = [
            'name_product_inventory.required' => 'El campo nombre es obligatorio',
        ];
        $this->validate($request,$rules,$messages);

        $event = Inventory::create([
            'name_product_inventory'        => $request->name_product_inventory,
            'stock_inventory'               => $request->stock_inventory,
            'division_id'                   => $request->division_id,
            'category_id'                   => $request->category_id,
            'level_area_id'                 => $request->level_area_id,
            'sku_product_inventory'         => $request->sku_product_inventory,
            'barcode_product_inventory'     => $request->barcode_product_inventory,
            'provider_id'                   => $request->provider_id,
            'brand_id'                      => $request->brand_id,
            'unit_of_measurement_id'        => $request->unit_of_measurement_id,
            'size_product_inventory'        => $request->size_product_inventory,
            'type_of_material_id'           => $request->type_of_material_id,
            'key_sat_unit_inventory'        => 1,
            'key_sat_product_inventory'     => 1,
            'minimum_inventory'             => $request->minimum_inventory,
            'unit_cost_inventory'           => $request->unit_cost_inventory,
            // 'suggested_sale_inventory'      => $request->suggested_sale_inventory,
            // 'price_product_inventory'       => $request->price_product_inventory,
            'description_product_inventory' => $request->description_product_inventory,
            'status'                        => 0,
        ]);
        // dd($event);

        event(new Registered($event));

        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'El producto ha sido agregado correctamente'
        ]);
        // return redirect()->route('view-products');
        return back();
    }

    // public function getProducts() {

    //     $users = new UserCollection( User::all() );

    //     return response()->json([
    //         'data' => $users
    //     ]);

    // }
    public function getProductsMapro() {
        $request = request();
        $inventory   = Inventory::with(['category','division','provider','brand','umedida','typematerial','satkeyunidad', 'levelarea', 'size', 'clasesat']);
        // $inventory   = Inventory::all();
        return $inventory->where('status', 1)->get();
        // return Inventory::get();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
