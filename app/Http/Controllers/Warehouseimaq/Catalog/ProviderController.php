<?php

namespace App\Http\Controllers\Warehouseimaq\Catalog;

use App\Models\Rol;
use App\Models\User;
use App\Models\Imaqprovider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.warehouseimaq.provider.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.warehouseimaq.provider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_provider_imaq'          => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|unique:users|email',
            'phone'         => 'required|max:255',
            'rfc'           => 'required',
            'address'       => 'required',
        ]);

        $event = User::create([
            'name_provider_imaq'                    => $request->name,
            'last_name_provider_imaq'               => $request->last_name,
            'email'                                 => $request->email,
            'password'                              => Hash::make($request->password),
        ]);
        // $provider->assignRole('proveedor');
        // dd($provider);


        $client->Imaqprovider()->create([
            'phone'     => $request->phone,
            'rfc'       => $rfc,
            'address'   => $request->address,
            'status'    => 1
        ]);

        event(new Registered($event));


        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'El producto ha sido agregado correctamente'
        ]);
        // return redirect()->route('view-products');
        return back();
    }


    public function getGeneralProviders() {
        $request = request();
        $providers   = Imaqprovider::with(['provider']);
        // dd($providers);
        return $providers->get();

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
