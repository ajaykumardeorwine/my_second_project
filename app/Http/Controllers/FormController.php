<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createUser');
    }
      
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $validatedData = $request->validate([
                'name' => 'required',
                'price'=> 'required',
                'category_id'=>'required'
            ], [
                'name.required' => 'Name field is required.',
                'price.required'=>'price is field required',
                'category_id.required'=>'category field is required',
            ]);
    
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
          
        return back()->with('success', 'User created successfully.');
    }
}
