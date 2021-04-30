<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKomdaRequest;
use App\Http\Requests\UpdateKomdaRequest;
use App\Models\Komda;
use Illuminate\Http\Request;

class KomdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komdas = Komda::all();

        return view('komda.index', compact('komdas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komda.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKomdaRequest $request)
    {
        Komda::create($request->validated());

        return redirect()->route('komdas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Komda  $komda
     * @return \Illuminate\Http\Response
     */
    public function show(Komda $komda)
    {
        return view('komda.show', compact('komda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Komda  $komda
     * @return \Illuminate\Http\Response
     */
    public function edit(Komda $komda)
    {
        return view('komda.edit', compact('komda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Komda  $komda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKomdaRequest $request, Komda $komda)
    {
        $komda->update($request->validated());

        return redirect()->route('komdas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Komda  $komda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Komda $komda)
    {
        $komda->delete();

        return redirect()->route('komdas.index');
    }
}
