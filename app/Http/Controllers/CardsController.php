<?php

namespace App\Http\Controllers;

use App\Models\garsviela;
use Illuminate\Http\Request;
use App\Models\kartis;

class CardsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = kartis::all();
    return view('cardscatalogue', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cards = kartis::all();
        return view('cardscreate', compact('cards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $card = new kartis();
        $card->nosaukums = $request->nosaukums;
        $card->efekts = $request->efekts;
        $card->cena = $request->cena;
        $card->skaits = $request->skaits;
        $card->kompanija_id = $request->kompanija;
        $card->save();
        #to perform a redirect back, we need country code from ID
        $action = action([CardsController::class, 'index']);
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
        $cards = kartis::findOrFail($id);
        return view('cardsupdate', compact('cards'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cards = kartis::findOrFail($id);
        $cards->nosaukums = $request->nosaukums;
        $cards->save();
        $action = action([CardsController::class, 'index']);
        return redirect($action);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kartis::findOrfail($id)->delete();
        return redirect('cards/');
    }
}
