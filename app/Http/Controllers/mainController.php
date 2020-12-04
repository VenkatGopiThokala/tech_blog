<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class mainController extends Controller
{
    public function index()
    {
        $articles = Articles::all();
        return view('main', compact('articles'));

    }

    public function showArticle($id)
    {
        $articles = Articles::all();
        $article = Articles::find($id);

        return view('article', compact('articles', 'article'));

    }
    public function showGadgets()
        {
            $articles = Articles::all();

            return view('gadgets', compact('articles'));

        }
    public function showVideos()
        {
            $articles = Articles::all();

            return view('videos', compact('articles'));

        }
    public function showReviews()
        {
            $articles = Articles::all();

            return view('reviews', compact('articles'));

        }
}
