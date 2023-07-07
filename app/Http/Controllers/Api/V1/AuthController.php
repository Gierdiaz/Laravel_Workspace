<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(Request $request) {

        if(Auth::attempt($request->only('email', 'password'))){
            return $this->success('Authorized', 200, [                
                'token' => $request->user()->createToken('invoice')->plainTextToken //token do usário.
            ]);
        };
        
        return $this->fail('Authorition not authenticated', 403);
    }

    public function logout(Request $request) 
    {
        $request->user()->currentAccessToken()->delete();

        return $this->success('Token Revoked', 200);
    }
}
