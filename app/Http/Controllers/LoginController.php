<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //working with middleware on the controller
    public function __construct()
    {  
       //$this->middleware('guest'); 
    }

    public function index() {
        
    }
}
