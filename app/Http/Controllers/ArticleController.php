<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function create(){
        return view('article/create');
    }

    public function store(ArticleRequest $request){
        
        
        try{
            Article::create([
                'title' => $request->title,
                'author' => $request->author,
                'content' => $request->content,
                'tag' => $request->tag,
                'img' => $request->has('img') ? $request->file('img')->store('covers', 'public') : '/img/default.jpg'
            ]);
        }catch(Exception $error){
            return redirect()->route('article.store-result')->with('articleError', 'Articolo non creato correttamente. Riprova più tardi.');
        }
        return redirect()->route('article.store-result')->with('articleConfirm', 'Articolo creato con successo.');
    }

    public function storeresult(){
        return view('article/store-result');
    }

    public function show(){
        $articles = Article::orderBy('created_at', 'desc')->get();
        $firstArticle = Article::find(1);
        return view('article/all', compact('articles'), ['firstArticle' => $firstArticle]);
    }

    public function detail($id){
        $articles = Article::all();
        foreach ($articles as $article) {
            if ($article->id == $id){
                return view('article/detail', ['article' => $article]);
            }
        }
    }
}
