<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    function index(){ //VISTA USUARIOS
        $users = User::all();
    
        return view('users.users', compact('users'));
    }
}
