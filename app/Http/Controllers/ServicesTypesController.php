<?php

namespace App\Http\Controllers;

use App\Services\ServicesTypes;
use Illuminate\Http\Request;

class ServicesTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $service_type = ServicesTypes::create($request->all());
        return response()->json($service_type, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services\ServicesTypes  $servicesTypes
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesTypes $servicesTypes)
    {
        return $servicesTypes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services\ServicesTypes  $servicesTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesTypes $servicesTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\ServicesTypes  $servicesTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesTypes $servicesTypes)
    {
        $servicesTypes->update($request->all());
        return response()->json($servicesTypes, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services\ServicesTypes  $servicesTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesTypes $servicesTypes)
    {
        $ServicesTypes->delete();
        return response()->json(null, 204);
    }
}
