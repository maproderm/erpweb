<?php

namespace App\Http\Controllers\Sales\Config;
use App\Models\Imaqbrand;
use App\Models\Imaqcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.sales.config.categories');
    }

    public function brands()
    {
        return view('admin.sales.config.brands');
    }

    public function getCategories() {

        // return Imaqcategory::get();
        $request = request();
        $inventory   = Imaqcategory::with(['division']);
        return $inventory->get();

    }

    public function getBrands() {

        return Imaqbrand::get();

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
    public function store(Request $request)
    {
        //
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
