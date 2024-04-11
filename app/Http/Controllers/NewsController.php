<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Pictures;

class NewsController extends Controller
{
    public function berita(News $news)
    {
        return view('berita', [
            "style" => "style-berita",
            "title" => "BERITA KAMI",
            "title_url" => "Berita Kami",
            'news' => $news->latest()->paginate(8)

        ]);
    }

    public function home(News $news, Pictures $picture)
    {
        return view('index', [
            'news' => $news->latest()->get(),
            'picture' => $picture->latest()->get()
        ]);
    }

    public function news(News $news)
    {
        return view('news', [
            "title" => "",
            "title_url" => "news | $news->title",
            "style" => "style-news",
            "news" => $news
        ]);
    }
}
