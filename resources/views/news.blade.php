@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (\Auth::user()->isAdmin)

                    <form method="get" action="/news/create">
                        <button type="submit">Add News</button>
                    </form>

                @endif

                @if ($news == null)
                    <h3>No news yet</h3>
                @else
                    @foreach($news as $newsitem)
                        <div class="card">
                            <div class="card-header">
                                <a href="/news/{{ $newsitem->id }}"><h3>{{ $newsitem->title }}</h3></a>
                            </div>
                            <div class="card-body">
                                <p><a>{{ $newsitem->text }}</a></p>
                                <p>
                                    <img
                                        src={{ $newsitem->image }},
                                        alt=""
                                    >
                                </p>
                                <p>Last Edited: {{ $newsitem->date }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
