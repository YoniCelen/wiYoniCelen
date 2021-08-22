<?php


namespace App\Http\Controllers;


use App\Models\Faq;

class FaqController
{
    public function index()
    {
        $faq = FAQ::orderBy('id', 'desc')->get();
        return view('faq', ['faq' => $faq]);
    }

    public function store()
    {
        request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = new Faq();
        $faq->question = request('title');
        $faq->answer = request('text');
        $faq->save();

        return redirect('/faq');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('editFaqItem', ['faq' => $faq]);
    }

    public function update($id)
    {
        $faq = Faq::find($id);
        request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update([
            'question' => request('title'),
            'answer' => request('text')
        ]);

        return redirect('/faq');
    }
}
