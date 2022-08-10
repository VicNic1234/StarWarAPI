<?php

namespace App\Http\Controllers\API\V1;

use App\Models\StarshipClass;
use App\Http\Requests\StoreStarshipClassRequest;
use App\Http\Requests\UpdateStarshipClassRequest;
use App\Http\Controllers\Controller;
use App\Models\Starship;
use App\Http\Resources\V1\StarshipClassResource;
use App\Http\Resources\V1\StarshipClassCollection;

class StarshipClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return StarshipClass::all();
        return new StarshipClassCollection(StarshipClass::all());
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
     * @param  \App\Http\Requests\StoreStarshipClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStarshipClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StarshipClass  $starshipClass
     * @return \Illuminate\Http\Response
     */
    public function show(StarshipClass $StarshipClass)
    {
        //
        return new StarshipClassResource($StarshipClass); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StarshipClass  $starshipClass
     * @return \Illuminate\Http\Response
     */
    public function edit(StarshipClass $StarshipClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStarshipClassRequest  $request
     * @param  \App\Models\StarshipClass  $StarshipClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStarshipClassRequest $request, StarshipClass $StarshipClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StarshipClass  $StarshipClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(StarshipClass $StarshipClass)
    {
        //
    }
}
