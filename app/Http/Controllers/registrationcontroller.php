<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        
    }

    /**
     * Store a newly created resource in storage.
     */

    
     public function store(Request $request)
     {
         // Validate the form data
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:8|confirmed',
         ]);
     
         // Create a new user
         $user = User::create([
             'name' => $validatedData['name'],
             'email' => $validatedData['email'],
             'password' => Hash::make($validatedData['password']),
         ]);
     
         // Perform any additional actions, such as sending a confirmation email
     
         // Redirect the user to a success page
         return redirect()->route('web');
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
 
 
 
