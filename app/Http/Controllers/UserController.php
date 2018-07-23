<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    
    public function show($id) { // prima parametar iz rute i moze se nazvati bilo kako
        $user = User::find($id); // pronalazi red sa trazenim id iz tabele
        return view('users.show', compact('user'));
    }
}
