<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
  
    public function index()
    {
    return view('createuser');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     */

    
     public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

 
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();


        return redirect('/');
    }
     

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
               
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
        //
    }
} 
 
 
 
