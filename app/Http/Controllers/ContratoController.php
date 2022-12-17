<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContratoRequest;
use App\Http\Requests\UpdateContratoRequest;
use App\Http\Resources\ContratoResource;
use App\Models\Contrato;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrato = Contrato::all();
        return ContratoResource::collection($contrato);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContratoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContratoRequest $request)
    {
        $Contrato = Contrato::create($request->validated());

        return new ContratoResource($Contrato);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        $data = Contrato::find($contrato->id);
        return new ContratoResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContratoRequest  $request
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContratoRequest $request, Contrato $contrato)
    {
        $contrato->fill($request->validated())->save();

        return new ContratoResource($contrato);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
        Contrato::destroy($contrato->id);
        return response()->json([], 204);
    }
}
