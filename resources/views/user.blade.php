@extends('layouts.app')

@section('content')

    <h1>Profile</h1>
    <h3>Avatar</h3>
    <p>{{ $user->avatar }}</p>
    <h3>Name</h3>
    <p>{{ $user->name }}</p>
    <h3>Ign</h3>
    <p>{{ $user->ign }}</p>
    <h3>email</h3>
    <p>{{ $user->email }}</p>
    <h3>Birthday</h3>
    <p>{{ $user->birthday }}</p>
    <h3>Bio</h3>
    <p>{{ $user->bio }}</p>

    @if (\Auth::user() != null)

        @if (\Auth::user()->name == $user->name)

            <form method="get" action="/user/edit/{{ $user->name }}">
                <button type="submit">Edit</button>
            </form>

        @endif

        @if (\Auth::user()->isAdmin && !$user->isAdmin)

            <form method="post" action="/user/makeadmin/{{ $user->name }}">
                @csrf
                @method('put')
                <button type="submit">Make admin</button>
            </form>

        @endif

    @endif


@endsection
