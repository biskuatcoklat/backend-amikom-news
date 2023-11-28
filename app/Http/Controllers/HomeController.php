<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $usertype = Auth::user()->usertype;
        if($usertype==1)
        {
            return view('admin.home');
        }
        else
        {
            $nama = Auth::user()->name;
            $nim = Auth::user()->nim;
            return view('amikom.home',compact('nama','nim'));
        }
    }

    public function index()
    {
        $news = News::all();
        return view('amikom.news',compact('news'));
    }

    public function detailNews($id)
    {
        $news = News::find($id);
        return view('amikom.detail',compact('news'));
    }

    public function logout1(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
