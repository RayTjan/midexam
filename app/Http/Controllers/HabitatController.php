<?php

namespace App\Http\Controllers;

use App\Models\Habitat;
use Illuminate\Http\Request;

class HabitatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habitats = Habitat::all();
        return view('habitat.habitat', compact('habitats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitat.addHabitat');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Habitat::create($request->all());
        return redirect()->route('habitat.index');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function show(Habitat $habitat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitat $habitat)
    {
        return view('habitat.editHabitat',compact('habitat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habitat $habitat)
    {
        $habitat->update($request->all());
        return redirect()->route('habitat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitat  $habitat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitat $habitat)
    {
        $habitat->delete();
        return redirect()->back();
    }
}
