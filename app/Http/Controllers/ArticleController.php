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
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/articles/images', $file_name);
        }

        Article::create([
            'authors'=> $request->authors,
            'titles'=> $request->titles,
            'categorys'=>$request->categorys,
            'txt_articles'=>$request->txt_articles,
            'images'=>$request->$path_image
        ]);
        session()->flash('success', 'Articolo creato con successo');
        redirect()->route('articles.index');
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
        $path_image = $request->images;
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/articles/images', $file_name);
        }
            $article->update([
                'authors'=> $request->authors,
                'titles'=> $request->titles,
                'categorys'=>$request->categorys,
                'txt_articles'=>$request->txt_articles,
                'images'=>$request->$path_image
            ]);
            session()->flash('success', "L'articolo è stato aggiornato con successo");
            redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        session()->flash('success', "L'articolo è cancellato con successo");
        redirect()->route('articles.index');
    }
}
