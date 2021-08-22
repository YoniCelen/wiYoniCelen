@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form method="get" action="/forum/create">
                    <button type="submit">Add Post</button>
                </form>

                @if ($forum == null)
                    <h3>No posts yet</h3>
                @else
                    @foreach($forum as $forumItem)
                        <div class="card">
                            <div class="card-header">
                                <a><h3>{{ $forumItem->title }}</h3></a>
                            </div>
                            <div class="card-body">
                                <p><a>{{ $forumItem->text }}</a></p>
                                <p>By: {{ $forumItem->creator }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
