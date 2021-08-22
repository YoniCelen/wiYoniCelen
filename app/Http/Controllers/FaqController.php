<?php


namespace App\Http\Controllers;


use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faq = FAQ::orderBy('id', 'asc')->get();
        return view('faq', ['faq' => $faq]);
    }

    public function create()
    {
        return view('createfaqitem');
    }

    public function store()
    {
        request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->save();

        return redirect('/faq');
    }

    public function show($id)
    {
        $faqItem = Faq::where('id', $id)->first();

        return view('faqitem', ['faqItem' => $faqItem]);
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('editfaqitem', ['faq' => $faq]);
    }

    public function update($id)
    {
        $faq = Faq::find($id);
        request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update([
            'question' => request('question'),
            'answer' => request('answer')
        ]);

        return redirect('/faq');
    }

    public function destroy(Faq $faq)
    {
        //
    }
}
