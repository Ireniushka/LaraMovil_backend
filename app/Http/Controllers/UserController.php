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

    public function activados(){ //VISTA ACTIVOS
        $users = User::where('activated','=',0)->get();
    
        return view('users.usersAct', compact('users'));
    }
    
    public function desactivados(){ //VISTA DESACTIVOS
        $users = User::where('activated','=',1)->get();
    
        return view('users.usersDct',compact('users'));
    }
}
