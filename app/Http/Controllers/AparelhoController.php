<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAparelhoRequest;
use App\Http\Requests\UpdateAparelhoRequest;
use App\Http\Resources\AparelhoResource;
use App\Models\Aparelho;

class AparelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aparelhos = Aparelho::with('contrato')->get();
        return AparelhoResource::collection($aparelhos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAparelhoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAparelhoRequest $request)
    {
        $aparelho = Aparelho::create($request->validated());

        return new AparelhoResource($aparelho);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function show(Aparelho $aparelho)
    {
        $data = Aparelho::with('contrato')->find($aparelho->id);

        return new AparelhoResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAparelhoRequest  $request
     * @param  \App\Models\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAparelhoRequest $request, Aparelho $aparelho)
    {
        $aparelho->fill($request->validated())->save();

        return new AparelhoResource($aparelho);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aparelho  $aparelho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aparelho $aparelho)
    {
        Aparelho::destroy($aparelho->id);
        return response()->json([], 204);
    }
}
