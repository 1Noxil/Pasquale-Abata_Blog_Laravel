<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function homepage(){
        $articles = Article::all();
        return view('homepage',compact('articles'));
    }
    public function blog(){
        $articles = Article::paginate('3');
        return view('blog.blog',compact('articles'));
    }
    public function show(Article $article)
    {
        return view('blog.show', compact('article'));
    }
}

