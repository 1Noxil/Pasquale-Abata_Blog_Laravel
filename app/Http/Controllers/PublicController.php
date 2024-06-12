<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\Article;
use App\Models\User;
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
    public function profile(User $user){
        return view('profile',compact('user'));
    }

    public function update_profile(UpdateUserRequest $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->update([
            'name' => $request->name,
        ]);

        return redirect()->route('profile',['user'=> auth()->user()->id]);
    }
}

