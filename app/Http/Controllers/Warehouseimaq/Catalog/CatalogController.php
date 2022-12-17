<?php

namespace App\Http\Controllers\Warehouseimaq\Catalog;

use App\Models\Rol;
use App\Models\User;
use App\Models\Imaqbrand;
use App\Models\Imaqumedida;
use App\Models\Imaqcategory;
use App\Models\Imaqdivision;
use App\Models\Imaqprovider;
use Illuminate\Http\Request;
use App\Models\Imaqtypematerial;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexbrand()
    {
        return view('admin.warehouseimaq.catalog.brand.index');
    }

    public function indexdivision()
    {
        return view('admin.warehouseimaq.catalog.division.index');
    }

    public function indexcategory()
    {
        return view('admin.warehouseimaq.catalog.category.index');
    }

    public function indexprovider()
    {
        return view('admin.warehouseimaq.catalog.provider.index');
    }

    public function indexmeasurement()
    {
        return view('admin.warehouseimaq.catalog.measurement.index');
    }

    public function indextypematerial()
    {
        return view('admin.warehouseimaq.catalog.typematerial.index');
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

    }


    public function getBrandsImaq() {
        return Imaqbrand::where('type', 3)->get();
    }

    public function getCategoriesImaq() {

        // return Imaqcategory::get();
        $request = request();
        $inventory   = Imaqcategory::with(['division']);
        return $inventory->where('division_id', 1)->get();

    }

    public function getDivisionesImaq() {
        return Imaqdivision::get();
    }

    public function getProvidersImaq() {
        $request = request();
        $providers   = Imaqprovider::with(['provider']);
        // dd($providers);
        return $providers->get();

    }

    public function getMeasurementImaq() {
        return Imaqumedida::get();
    }

    public function getMaterialImaq() {
        return Imaqtypematerial::get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function storeBrandImaq(Request $request)
     {
         $event = Imaqbrand::create([
             'name' =>$request->name_brand_imaq,
             'type' =>3,
             'description' =>$request->description_brand_imaq,
         ]);
         event(new Registered($event));
         Session::flash('alert',[ // Message for Swal general alert
             'type'    => 'success',
             'message' => 'Nueva marca de proveedor registrada'
         ]);
         return back();
     }

     public function storeCategoryImaq(Request $request)
     {
         $event = Imaqcategory::create([
             'name' =>$request->name_category_imaq,
             'status' =>1,
             'division_id' =>1,
         ]);
         event(new Registered($event));
         Session::flash('alert',[ // Message for Swal general alert
             'type'    => 'success',
             'message' => 'Nueva categoría de almacén registrada'
         ]);
         return back();
     }

     public function storeDivisionImaq(Request $request)
     {
         $event = Imaqdivision::create([
             'name' =>$request->name_division_imaq,
             'abrv' =>$request->abrv_division_imaq,
         ]);
         event(new Registered($event));
         Session::flash('alert',[ // Message for Swal general alert
             'type'    => 'success',
             'message' => 'Nueva division registrada'
         ]);
         return back();
     }

     public function storeProviderImaq(Request $request)
    {
        $event = User::create([
            'name'          =>$request->name_provider_imaq,
            'last_name'     =>$request->last_name_provider_imaq,
            'email'         =>$request->email_provider_imaq,
            // 'membership'    =>$request->membership_client,
            'password'      => Hash::make('Imaq.2024'),
        ]);
        $event->assignRole('provider');

        $event->providerInformation()->create([
            'phone'      => $request->phone_provider_imaq,
            'rfc'        => $request->rfc_provider_imaq,
            'address'    => $request->address_provider_imaq,
            'status'     => 1,
        ]);

        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nuevo proveedor registrado'
        ]);
        return back();
    }

    public function storeMeasurementImaq(Request $request)
     {
         $event = Imaqumedida::create([
             'name' =>$request->name_measurement_imaq,
         ]);
         event(new Registered($event));
         Session::flash('alert',[ // Message for Swal general alert
             'type'    => 'success',
             'message' => 'Registro exitoso'
         ]);
         return back();
     }

     public function storeMaterialImaq(Request $request)
     {
         $event = Imaqtypematerial::create([
             'name' =>$request->name_material_imaq,
         ]);
         event(new Registered($event));
         Session::flash('alert',[ // Message for Swal general alert
             'type'    => 'success',
             'message' => 'Registro exitoso'
         ]);
         return back();
     }


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
