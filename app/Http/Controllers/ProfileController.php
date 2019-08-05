<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ProfileMail;

class ProfileController extends Controller
{
    public function sendEmail ()
    {




         Mail::to('juan@mail.com')->send(new ProfileMail());

         return redirect('/home');



    }
}
