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
        $smells = smarza::all();
        return view('spicecreate', compact('smells'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $smell = new smarza();
        $smell->apraksts = $request->apraksts;
        $smell->save();
        #to perform a redirect back, we need country code from ID
        $action = action([SpicesController::class, 'spicecreate']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
