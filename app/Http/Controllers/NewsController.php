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

    public function store(Request $request)
    {
        News::create(request()->validate([
            'titel' => 'required',
            'afbeelding' => 'required',
            'text' => 'required',
        ]));
    }

    public function show($id)
    {
        $newsitem = News::where('id', $id)->first();

        return view('newsitem', ['newsitem' => $newsitem]);
    }

    public function edit(News $news)
    {
        return view('editnewsitem', ['news' => $news]);
    }

    public function update(Request $request, News $news)
    {
        News::update(request()->validate([
            'titel' => 'required',
            'afbeelding' => 'required',
            'text' => 'required',
        ]));
    }

    public function destroy(News $news)
    {
        //
    }
}
