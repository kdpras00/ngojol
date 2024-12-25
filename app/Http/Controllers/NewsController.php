<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    public function index()
    {
        // Ambil semua data berita dari database
        $newsItems = News::all();

        // Kirim data ke view 'berita.blade.php'
        return view('news.index', compact('newsItems'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.detail', compact('news'));
    }
}
