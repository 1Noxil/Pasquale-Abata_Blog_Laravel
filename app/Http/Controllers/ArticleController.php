<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $articles= Article::paginate('6');
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('images')) {
            $file_name = $request->file('images')->getClientOriginalName();
            $path_image = $request->file('images')->storeAs('public/img/articles', $file_name);
        }
        $path_txt = '';
        if ($request->hasFile('txt_articles')) {
            $file_name = $request->file('txt_articles')->getClientOriginalName();
            $path_txt = $request->file('txt_articles')->storeAs('public/txt', $file_name);
        }

        Article::create([
            'authors'=> $request->authors,
            'titles'=> $request->titles,
            'categorys'=>$request->categorys,
            'txt_articles'=>$path_txt,
            'images'=>$path_image,
        ]);
        session()->flash('success', 'Articolo creato con successo');
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $path_image = $article->images;
        if ($request->hasFile('images')) {
            $file_name = $request->file('images')->getClientOriginalName();
            $path_image = $request->file('images')->storeAs('public/img/articles', $file_name);
        }
            $article->update([
                'authors'=> $request->authors,
                'titles'=> $request->titles,
                'categorys'=>$request->categorys,
                'txt_articles'=>$request->txt_articles,
                'images'=>$path_image,
            ]);
            session()->flash('success', "L'articolo è stato aggiornato con successo");
            return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('success', "L'articolo è cancellato con successo");
        return redirect()->route('articles.index');
    }
}
