<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Articles;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{

    public function __construct(){

        $this->middleware('auth',['only' => ['create','edit']]);
    }

    public function index(){

        $articles = Articles::latest('published_at')->published()->get();

        return view('articles.index',['articles' => $articles]);
    }

    public function show($id){

        $articles = Articles::findOrFail($id);

        return view('articles.show',['articles' => $articles]);
    }

    public function create(){

        return view('articles.create');

    }

    public function store(ArticleRequest $request){

        $article = new Articles($request->all()); //user_id

        Auth::user()->articles()->save($article);

        return redirect('articles');

    }

    public function edit($id){

        $article = Articles::findOrFail($id);
        return view('articles.edit',['article' => $article]);

    }

    public function update($id, ArticleRequest $request){

        $article = Articles::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
