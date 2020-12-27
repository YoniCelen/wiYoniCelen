@extends('layoutBasic')

@section('body')

    <div>
        <ul>
            @if ($news == null)
                <h3>No news yet</h3>
            @else
                @foreach($news as $newsitem)
                   <li>
                     <h3>{{ $newsitem->title }}</h3>
                      <p><a>{{ $newsitem->text }}</a></p>
                       <p><img
                               src={{ $newsitem->afbeelding }},
                               alt=""
                           >
                       </p>
                   </li>
                 @endforeach
            @endif
        </ul>
    </div>

@endsection
