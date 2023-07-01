<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function login() {

        auth::loginUsingId(2);  //Logging in
        //auth::logout();         //Logging out
    }
}
