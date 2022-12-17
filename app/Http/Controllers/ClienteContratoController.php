<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteContratoRequest;
use App\Http\Requests\UpdateClienteContratoRequest;
use App\Http\Resources\ClienteContratoResource;
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
        $clienteContratos = ClienteContrato::with(['clientes', 'contratos', 'aparelhos', 'contas'])->get();

        return ClienteContratoResource::collection($clienteContratos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteContratoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteContratoRequest $request)
    {
        $clienteContratos = ClienteContrato::create($request->validated());

        return new ClienteContratoResource($clienteContratos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClienteContrato  $ClienteContrato
     * @return \Illuminate\Http\Response
     */
    public function show(ClienteContrato $clientecontrato)
    {
        $data = ClienteContrato::with(['clientes', 'contratos', 'aparelhos', 'contas'])->find($clientecontrato->id);
        return new ClienteContratoResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteContratoRequest  $request
     * @param  \App\Models\ClienteContrato  $ClienteContrato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteContratoRequest $request, ClienteContrato $clientecontrato)
    {
        $clientecontrato->fill($request->validated())->save();

        return new ClienteContratoResource($clientecontrato);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClienteContrato  $ClienteContrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClienteContrato $clientecontrato)
    {
        ClienteContrato::destroy($clientecontrato->id);
        return response()->json([], 204);
    }
}
