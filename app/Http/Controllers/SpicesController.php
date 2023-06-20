<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\garsviela;
use App\Models\smarza;

class SpicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spices = garsviela::all();
        return view('spicescatalogue', compact('spices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $spices = garsviela::all();
        $smells = smarza::all();
        return view('spicecreate', compact('spices', 'smells'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $spice = new garsviela();
        $spice->nosaukums = $request->nosaukums;
        $spice->efekts = $request->efekts;
        $spice->cena = $request->cena;
        $spice->skaits = $request->skaits;
        $spice->kompanija_id = $request->kompanija;
        $spice->smarza_id = $request->smarza;
        $spice->save();
        #to perform a redirect back, we need country code from ID
        $action = action([SpicesController::class, 'index']);
        return redirect($action);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $spices = garsviela::findOrFail($id);
        return view('spiceupdate', compact('spices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $spices = garsviela::findOrFail($id);
        $spices->nosaukums = $request->nosaukums;
        $spices->save();
        $action = action([SpicesController::class, 'index']);
        return redirect($action);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        garsviela::findOrfail($id)->delete();
        return redirect('spices/');
    }
}
