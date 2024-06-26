<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\JsonResponse;
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
            $totaluser = User::all()->count();
            $totalnews = News::all()->count();
            $nama = Auth::user()->name;
            return view('admin.home',compact('nama','totalnews','totaluser'));
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
        $news1 = News::find($id);
        // $news1->update(['is_read' => true]);
        return view('amikom.detail',compact('news1'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $sort = $request->sort;
        $news = News::where('title', 'LIKE', "%$search%")->orWhere('content', 'LIKE', "%$search%")->get();
        if ($sort === 'asc') {
            $search->orderBy('updated_at', 'asc');
        } elseif ($sort === 'desc') {
            $search->orderBy('updated_at', 'desc');
        }
        return response()->json($news);
    }

    // public function markAsRead($id)
    // {
    //     // $news = News::where('id', $id)
    //     // ->where('id', auth()->id()) // Assuming there is a user_id column in your news table
    //     // ->first();

    //     // if ($news) {
    //     //     $news->update(['is_read' => true]);
    //     //     return response()->json(['message' => 'News marked as read']);
    //     // }

    //     // return response()->json(['error' => 'News not found'], 404);
    // }


    public function profil()
    {
        $email = Auth::user()->email;
        $nama = Auth::user()->name;
        $nim = Auth::user()->nim;
        return view('amikom.profile',compact('nama','nim','email'));
    }

    public function logout1(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
