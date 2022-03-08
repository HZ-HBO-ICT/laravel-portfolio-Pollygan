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
    public function show(Faq $faq)
    {
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
        Faq::create($this->validateFaq());

        return redirect(route('faqs.index'));
    }
    public function edit(Faq $faq)
    {
        return view('faqs.edit', ['faq'=> $faq]);
    }
    public function update(Faq $faq)
    {
        $faq->update($this->validateFaq());

        return redirect($faq->path());
    }
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }


    protected function validateFaq()
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'required'
        ]);
    }
}
