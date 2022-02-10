<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController
{

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug)
    {
        // $post = DB::table('post')->where('slug', $slug)->first();
        return view('post', [
            'post'=> Post::where('slug', $slug)->firstorFail()
        ]);
    }
}
