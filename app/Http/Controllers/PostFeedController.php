<?php

namespace App\Http\Controllers;

class PostFeedController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('post-feed');
    }
}
