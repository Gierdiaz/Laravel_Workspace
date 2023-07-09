<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create(): View {

        return view('Register.register_create');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required|confirmed|min:5'
        ], [ 
            'name.required'      => 'Nome obrigatório',
            'email.required'     => 'E-mail obrigatório',
            'email.email'        => 'E-mail precisa ser válido',
            'password.required'  => 'Senha obrigatório',
            'password.confirmed' => 'Confirme sua senha' 
        ]);

/*         dd($request)->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        } */
    }
}
