<?php

namespace App\Http\Controllers\Warehouseimaq\Catalog;

use App\Models\Rol;
use App\Models\Imaqbrand;
use App\Models\Imaqcategory;
use App\Models\Imaqdivision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Http\Resources\User\UserCollection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data               = (object)[];
        // $data->division     = Imaqdivision::all();
        return view('admin.warehouseimaq.catalog.category.index');
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
        //
    }


    public function getCategories() {

        // return Imaqcategory::get();
        $request = request();
        $inventory   = Imaqcategory::with(['division']);
        return $inventory->where('division_id', 1)->get();

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
    public function delete( $id ) {

        try {

            $deletedCategory     = Imaqcategory::findOrFail($id)->delete();

            if( $deletedCategory ) {
                $title  = 'Eliminado';
                $msj    = 'El usuario ha sido eliminado correctamente';
                $type   = 'success';

            } else {

                $title  = 'Error';
                $msj    = 'Ocurrio un error durante el proceso, contacte al equipo de sistemas o intentelo más tarde';
                $type   = 'error';

            }


            return response()->json([
                'title'     => $title,
                'message'   => $msj,
                'type'      => $type
            ]);

        } catch (\Throwable $th) {
            return response()->json([
                'title'     => 'Error',
                'message'   => "Ocurrio un error: " . $th->getMessage(),
                'type'      => 'error'
            ]);
        }

    }
}
