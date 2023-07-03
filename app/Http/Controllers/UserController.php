<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public readonly User $user;

    public function __construct() 
    {
        $this->user = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = $this->user->all();

        return view('users', ['users' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
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
    public function edit(User $user) //model binding
    {
        return view('user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user)
    {
        $updated = $this->user
        ->where('id', $user)
        ->update($request
        ->except(['_token', '_method']));

        if($updated) {
            return redirect()->back()->with('message', 'Successfully updated');
        }

        return redirect()->back()->with('message', 'Erro update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
