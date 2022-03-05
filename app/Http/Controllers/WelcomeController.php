<?php

namespace App\Http\Controllers;

use App\Models\Article;

class WelcomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('welcome', ['articles' => Article::take(3)->get()]);
    }
}
