<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\ArticleInsertRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Article;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function create()
    {
        return Inertia::render('Article/Form', [
            'isEdit' => false
        ]);
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return Inertia::render('Article/Form', [
            'isEdit' => true,
            'article' => $article
        ]);
    }

    public function show()
    {
        $articles = Article::all();
        return Inertia::render("Article/Show", [
            'articles' => $articles
        ]);
    }

    public function insert(ArticleInsertRequest $request)
    {

        $request->validate($request->rules());

        $request->file('image')->storeAs("public", $request->file('image')->getClientOriginalName());

        Article::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'image' => $request->file('image')->getClientOriginalName(),
            'content' => $request->content,
        ]);

        return redirect(route('article.show'));
    }

    public function update(ArticleInsertRequest $request, $id)
    {
        $request->validate($request->rules());

        $article = Article::find($id);

        $article->title = $request->title;
        $article->slug = $request->slug;
        $article->image = $request->image;
        $article->content = $request->content;

        $article->save();

        return redirect(route('article.show'));
    }

    public function delete(Request $request)
    {

        $article = Article::find($request->id);

        $article->delete();

        return redirect(route('article.show'));
    }
}
