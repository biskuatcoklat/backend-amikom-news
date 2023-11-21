<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $usertype = Auth::user()->usertype;
        if($usertype==1)
        {
            return view('dashboard');
        }
        else
        {
            return view('welcome');
        }
    }
}
