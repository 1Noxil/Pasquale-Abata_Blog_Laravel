<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $users=User::paginate('6');
        return view('authors.index',compact('users'));
    }

    public function show(User $user)
    {
        $articles=Article::all();
        return view('authors.show',compact('articles','user'));
    }
}
