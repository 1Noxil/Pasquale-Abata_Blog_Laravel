<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Mail\CreateArticleMail;
use App\Mail\UpdateArticleMail;
use Illuminate\Support\Facades\Mail;


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

    public function dashboard()
    {
        return view('articles.dashboard');
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
            $path_image = $request->file('image')->storeAs('public/img/articles', $file_name);
        }

        $article = Article::create([
            "title" => $request->title,
            'category' => $request->category,
            "body" =>  $request->body,
            "status" =>  $request->status,
            'user_id' => auth()->user()->name,
            'slug' => str()->slug($request->title, '-'),
            'image' => $path_image
        ]);

        Mail::to(auth()->user()->email)->send(new CreateArticleMail($article));
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
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/img/articles', $file_name);
        }
            $article->update([
                "title" => $request->title,
                'category' => $request->category,
                "body" =>  $request->body,
                "status" =>  $request->status,
                'image' => $path_image
            ]);
            Mail::to(auth()->user()->email)->send(new UpdateArticleMail($article));
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
