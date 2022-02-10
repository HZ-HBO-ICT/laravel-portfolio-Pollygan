<?php

namespace App\Http\Controllers;
use App\Models\Faq;

class FAQController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        // $faqs = Faq::all();
        return view('faq', ['faq'=>Faq::all()]);

    }
}
