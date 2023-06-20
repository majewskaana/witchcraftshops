<?php

namespace App\Http\Controllers;

use App\Models\akmens;
use Illuminate\Http\Request;

class StoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $stones = akmens::all();
    return view('stonecatalogue', compact('stones'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stones = akmens::all();
        return view('stonecreate', compact('stones'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stone = new akmens();
        $stone->nosaukums = $request->nosaukums;
        $stone->efekts = $request->efekts;
        $stone->cena = $request->cena;
        $stone->skaits = $request->skaits;
        $stone->zodiaks()->associate($request->zodiaks);
        $stone->kompanija()->associate($request->kompanija);
        $stone->save();
        #to perform a redirect back, we need country code from ID
        $action = action([StoneController::class, 'index']);
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
        $stones = akmens::findOrFail($id);
        return view('stoneupdate', compact('stones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stones = akmens::findOrFail($id);
        $stones->nosaukums = $request->nosaukums;
        $stones->save();
        $action = action([StoneController::class, 'index']);
        return redirect($action);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        akmens::findOrfail($id)->delete();
        return redirect('stone/');
    }
}
