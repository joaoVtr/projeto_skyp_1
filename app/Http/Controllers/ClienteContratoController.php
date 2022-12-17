<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCliente_ContratoRequest;
use App\Http\Requests\UpdateCliente_ContratoRequest;
use App\Models\Cliente_Contrato;

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
     * @param  \App\Http\Requests\StoreCliente_ContratoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCliente_ContratoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente_Contrato  $cliente_Contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente_Contrato $cliente_Contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCliente_ContratoRequest  $request
     * @param  \App\Models\Cliente_Contrato  $cliente_Contrato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCliente_ContratoRequest $request, Cliente_Contrato $cliente_Contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente_Contrato  $cliente_Contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente_Contrato $cliente_Contrato)
    {
        //
    }
}
