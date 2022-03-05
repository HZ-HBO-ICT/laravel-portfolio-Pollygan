<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FAQController
{
    public function index()
    {
        return view('faqs.index', ['faq'=>Faq::all()]);
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $faq = Faq::find($id);
        return view('faqs.show', [
            'faq' => $faq
        ]);
    }
    public function create()
    {
        return view('faqs.create');
    }
    public function store()
    {
        // Creating a new faq
        $faq = new Faq();

        // setting its values to be according to the data from the form
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');
    }
    public function edit($id)
    {
        // find the article associated with the id
        $faq = Faq::find($id);

        return view('faqs.edit', ['faq'=> $faq]);
    }
    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq/' . $faq->id);
    }
    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect('/faq');
    }
}
