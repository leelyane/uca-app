<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantController extends Controller
{
    public function redirect()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->email == 'sarahfajali@gmail.com') {
                return redirect('/admin');
            }
            else{
                return view('home');
            }
        }

        return redirect('/login');
    }
}

