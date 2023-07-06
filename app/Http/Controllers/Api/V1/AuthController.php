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
            return $this->success('Authorized', 200, [                    //abilities tag down
                'token' => $request->user()->createToken('invoice', ['invoice:store', 'invoice:update', 'test-show'])->plainTextToken //token do usário.
            ]);
        };
        
        return$this->fail('Authorition not authenticated', 403);
    }
}
