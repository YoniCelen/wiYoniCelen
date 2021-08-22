@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                @if (\Auth::user()->isAdmin)

                    <form method="get" action="/faq/create">
                        <button type="submit">Add FAQ question</button>
                    </form>

                @endif

                @if ($faq == null)
                    <h3>No questions yet</h3>
                @else
                    @foreach($faq as $faqItem)
                        <div class="card">
                            <div class="card-header">
                                <a href="/faq/{{ $faqItem->id }}"><h3>{{ $faqItem->question }}</h3></a>
                            </div>
                            <div class="card-body">
                                <p><a>{{ $faqItem->answer }}</a></p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
