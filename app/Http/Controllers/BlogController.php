<?php

namespace App\Http\Controllers;

use App\Models\Article;

class BlogController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->class = request('class');

        $article->save();

        return redirect('/post-feed');
    }

    public function edit($id)
    {
        // find the article associated with the id
        $article = Article::find($id);

        return view('articles.edit', ['article'=> $article]);
    }

    public function update($id)
    {
        $article = Article::find($id);

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->class = request('class');

        $article->save();

        return redirect('/post-feed/' . $article->id);
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect('/post-feed');
    }
}
