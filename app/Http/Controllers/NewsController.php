<?php

namespace App\Http\Controllers;

use App\Models\CategoryNews;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $category_news = CategoryNews::all();
        return view('admin.category',compact('category_news'));
    }

    public function create(Request $request)
    {
        $category_news = new CategoryNews();
        $category_news->news_category=$request->news_category;
        $category_news->save();
        return redirect('/admin/category')->with('message','Category Berhasil Di Tambahkan');
    }

    public function destroy($id)
    {
        $category_news = CategoryNews::find($id);
        $category_news->delete();
        return redirect('/admin/category')->with('message','Category Success Di Hapus');
    }

    Public function news()
    {
        $news = News::all();
        return view('admin.news',compact('news'));
    }

    public function tambah()
    {
        return view('admin.create');
    }
}
