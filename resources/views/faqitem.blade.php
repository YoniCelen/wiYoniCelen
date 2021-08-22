@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $faqItem->question }}</h3>
                    </div>
                    <div class="card-body">
                        <p><a>{{ $faqItem->answer }}</a></p>
                    </div>
                </div>

                @if (\Auth::user()->isAdmin)

                    <form method="get" action="/faq/edit/{{ $faqItem->id }}">
                        <button type="submit">Edit</button>
                    </form>

                @endif

            </div>
        </div>
    </div>
@endsection
