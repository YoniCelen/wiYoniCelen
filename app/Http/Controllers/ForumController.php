<?php


namespace App\Http\Controllers;


use App\Models\Forum;

class ForumController
{

    public function index()
    {
        $forum = Forum::orderBy('id', 'desc')->get();
        return view('forum', ['forum' => $forum]);
    }

    public function create()
    {
        return view('createForumItem');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $forum = new Forum();
        $forum->title = request('title');
        $forum->text = request('text');
        $forum->save();

        return redirect('/forum');
    }

    public function show($id)
    {
        $forumItem = Forum::where('id', $id)->first();

        return view('forumItem', ['forumItem' => $forumItem]);
    }

    public function edit($id)
    {
        $forum = Forum::find($id);
        return view('editForumItem', ['forum' => $forum]);
    }

    public function update($id)
    {
        $forum = Forum::find($id);
        request()->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $forum->update([
            'title' => request('title'),
            'text' => request('text')
        ]);

        return redirect('/forum');
    }

    public function destroy(Forum $forum)
    {
        //
    }
}

