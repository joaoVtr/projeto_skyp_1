<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstoqueRequest;
use App\Http\Requests\UpdateEstoqueRequest;
use App\Http\Resources\EstoqueResource;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoque = Estoque::with('aparelho')->get();
        return EstoqueResource::collection($estoque);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEstoqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstoqueRequest $request)
    {
        $estoque = Estoque::create($request->validated());

        return new EstoqueResource($estoque);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function show(Estoque $estoque)
    {
        $data = Estoque::with('aparelho')->find($estoque->id);

        return new EstoqueResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstoqueRequest  $request
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstoqueRequest $request, Estoque $estoque)
    {
        $estoque->fill($request->validated())->save();

        return new EstoqueResource($estoque);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estoque  $estoque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estoque $estoque)
    {
        Estoque::destroy($estoque->id);
        return response()->json([], 204);
    }
}
