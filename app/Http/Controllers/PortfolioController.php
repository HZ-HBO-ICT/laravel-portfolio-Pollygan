<?php

namespace App\Http\Controllers;

class PortfolioController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('portfolio');
    }
}
