<?php

namespace App\Http\Controllers\Warehouseimaq\Inventory;

use App\Models\Rol;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.warehouseimaq.inventory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data         = (object)[];
        $data->division = Division::all();
        return view('admin.warehouseimaq.inventory.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name_product_inventory'      => ['required', 'string', 'max:255'],
        ];
        $messages = [
            'name_product_inventory.required' => 'El campo nombre es obligatorio',
        ];
        $this->validate($request,$rules,$messages);

        $event = Inventory::create([
            'name_product_inventory' => $request->name_product_inventory,
        ]);

        event(new Registered($products));

        // Auth::login($event);
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'El producto ha sido agregado correctamente'
        ]);
        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route('view-products');
    }

    public function getUsers() {

        $users = new UserCollection( User::all() );

        return response()->json([
            'data' => $users
        ]);

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
