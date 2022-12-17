<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContaRequest;
use App\Http\Requests\UpdateContaRequest;
use App\Http\Resources\ContaResource;
use App\Models\Conta;

class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conta = Conta::all();
        return ContaResource::collection($conta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContaRequest $request)
    {
        $conta = Conta::create($request->validated());

        return new ContaResource($conta);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function show(Conta $conta)
    {
        $data = Conta::find($conta->id);
        return new ContaResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContaRequest  $request
     * @param  \App\Models\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContaRequest $request, Conta $conta)
    {
        $conta->fill($request->validated())->save();

        return new ContaResource($conta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conta $conta)
    {
        Conta::destroy($conta->id);
        return response()->json([], 204);
    }
}
