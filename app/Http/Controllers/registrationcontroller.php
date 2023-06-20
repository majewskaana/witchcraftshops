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
        
         // Validate the form data
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:8|confirmed',
         ]);
     
         // Create a new user
         $user = new users();
         $user->name =  $validatedData['name'];
         $user->emails = $validatedData['email'];
         $user->passwor = Hash::make($validatedData['password']); 
         $user->save();
     
         // Perform any additional actions, such as sending a confirmation email
     
         // Redirect the user to a success page
         $action = action ([AllProductsController::class, 'index']);
         return redirect($action);
         
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
 
 
 
