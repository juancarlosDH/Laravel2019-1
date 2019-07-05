<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiUserController extends Controller
{
    public function getUser(Request $request){
        $email = $request->input('email');

        if ($user = User::where('email', '=', $email)->first()) {
            return ['existe'=>true];
        }

        return ['existe'=>false];
    }
}
