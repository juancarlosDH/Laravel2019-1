<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiUserController extends Controller
{
    public function getUser(Request $request){
        $email = $request->input('email');
        $user = User::where('email', '=', $email)->first();

        if ($user) {
            return json_encode(['existe'=>true]);
        }

        return json_encode(['existe'=>false]);
    }
}
