@extends('layoutBasic')

@section('body')

    <h1>Profile</h1>
    <p>{{ $user->username }}</p>

@endsection
