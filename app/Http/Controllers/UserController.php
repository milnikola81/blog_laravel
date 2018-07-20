<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    
    public function show($id) {
        $user = User::find($id); // pronalazi red sa trazenim id iz tabele
        return view('users.show', compact('user'));
    }
}
