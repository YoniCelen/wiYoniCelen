@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    @foreach($users as $user)
                                <p><a href="user/{{ $user->name }}">{{ $user->name }}</a></p>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
