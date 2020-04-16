<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser(){

        //Interação com a camada Model User
        /* $user = new User();
        $user->name = "Ariel";
        $user->email = "ariel@teste.com.br";
        $user->password = Hash::make('123');
        $user->save(); */

        $user = User::where('id', '>=', 1)->first();
        return view('listUser', [
            'userList' => $user
        ]);
    }
}
