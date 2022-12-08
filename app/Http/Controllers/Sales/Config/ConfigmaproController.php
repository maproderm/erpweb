<?php

namespace App\Http\Controllers\Sales\Config;
use App\Models\Imaqbrand;
use App\Models\Imaqcategory;
use App\Models\Imaqdivision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class ConfigmaproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.sales.pedidos.index');
    }

    public function categories()
    {
        $data               = (object)[];
        $data->division     = Imaqdivision::all();
        return view('admin.sales.config.categories', compact('data'));
    }

    public function brands()
    {
        return view('admin.sales.config.brands');
    }

    public function getCategories() {

        // return Imaqcategory::get();
        $request = request();
        $inventory   = Imaqcategory::with(['division']);
        return $inventory->where('division_id', 3)->get();
        // return $inventory->get();

    }

    public function getBrands() {

        // return Imaqbrand::get();
        return Imaqbrand::wherein('type', [1, 2])->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.sales.sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBrand(Request $request)
    {
        $event = Imaqbrand::create([
            'name' =>$request->name_brand,
            'type' =>$request->type_brand,
            'description' =>$request->description_brand,
        ]);
        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nueva marca registrada'
        ]);
        return back();
    }

    public function storeCategory(Request $request)
    {
        $event = Imaqcategory::create([
            'name' =>$request->name_category,
            'division_id' =>$request->id_division,
        ]);
        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nueva categoría registrada'
        ]);
        // return redirect()->route('view-products');
        return back();
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
