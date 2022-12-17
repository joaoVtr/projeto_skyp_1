<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteContratoRequest;
use App\Http\Requests\UpdateClienteContratoRequest;
use App\Models\ClienteContrato;

class ClienteContratoController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteContratoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteContratoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClienteContrato  $ClienteContrato
     * @return \Illuminate\Http\Response
     */
    public function show(ClienteContrato $ClienteContrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteContratoRequest  $request
     * @param  \App\Models\ClienteContrato  $ClienteContrato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteContratoRequest $request, ClienteContrato $ClienteContrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClienteContrato  $ClienteContrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClienteContrato $ClienteContrato)
    {
        //
    }
}
