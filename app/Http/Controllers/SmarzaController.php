<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\smarza;

class SpicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('smellcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $smell = new smarza();
        $smell->apraksts = $request->nosaukums;
        $smell->save();
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
        smarza::findOrfail($id)->delete();
        return redirect('spicecreate/');
    }
}
