<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        return view('news', ['news' => $news]);
    }

    public function create()
    {
        return view('createnewsitem');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'image' => 'required',
            'text' => 'required',
        ]);

        $news = new News();
        $news->title = request('title');
        $news->image = request('image');
        $news->text = request('text');
        $news->date = now();
        $news->save();

        return redirect('/news');
    }

    public function show($id)
    {
        $newsitem = News::where('id', $id)->first();

        return view('newsitem', ['newsitem' => $newsitem]);
    }

    public function edit($id)
    {
        $news = News::where('id', $id)->first();
        return view('editnewsitem', ['news' => $news]);
    }

    public function update(News $news)
    {
        request()->validate([
            'title' => 'required',
            'image' => 'required',
            'text' => 'required',
        ]);

        $news->update([
            'title' => request('title'),
            'image' => request('image'),
            'text' => request('text'),
            'date' => now()
        ]);

        return redirect('/news');
    }

    public function destroy(News $news)
    {
        //
    }
}
