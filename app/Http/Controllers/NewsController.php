<?php

namespace App\Http\Controllers;

use App\Models\CategoryNews;
use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;

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
        $category_news = CategoryNews::all();
        return view('admin.news',compact('news','category_news'));
    }

    public function tambah()
    {
        $category_news = CategoryNews::all();
        $news = News::all();
        return view('admin.create',compact('category_news','news'));
    }

    public function saveNews(Request $request)
    {
        $news = new News();
        $news->title=$request->title;
        $news->content=$request->content;
        $news->link=$request->link;
        $news->category_news_id=$request->category_news_id;
        $news->save();
        return redirect('/admin/news')->with('message','Berita Baru');
    }

    public function detail($id)
    {
        $detail = News::find($id);
        $category_news = CategoryNews::all();
        return view('admin.detail',compact('detail','category_news'));
    }

    public function editNews(Request $request, $id)
    {
        $detail = News::find($id);
        $detail->title=$request->title;
        $detail->content=$request->content;
        $detail->link=$request->link;
        $detail->category_news_id=$request->category_news_id;
        $detail->save();
        return redirect('/admin/news')->with('message','Berita Update');
    }

    public function destroyNews($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('/admin/news')->with('message','Berita Success Di Hapus');
    }
}
