<?php

namespace App\Http\Controllers\Sales\Client;
use App\Models\User;
use App\Models\Mpdclient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sales.clients.index');
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
    public function storeClient(Request $request)
    {
        $event = User::create([
            'name'          =>$request->name_client,
            'last_name'     =>$request->last_name_client,
            'email'         =>$request->email_client,
            'membership'    =>$request->membership_client,
            'password'      => Hash::make('Mpd.2024'),
        ]);
        $event->assignRole('customer');

        $event->clientInformation()->create([
            'address'           => $request->address_client,
            'city'              => $request->city_client,
            'postal_code'       => $request->postal_code_client,
            'phone'             => $request->phone_client,
        ]);

        event(new Registered($event));
        Session::flash('alert',[ // Message for Swal general alert
            'type'    => 'success',
            'message' => 'Nuevo cliente registrado'
        ]);
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

    public function getClients() {
        // $clients   = User::role('distribuidor');
        // return $users->get();
        $request = request();
        $clients   = Mpdclient::with(['client']);
        return $clients->get();
    }
}
