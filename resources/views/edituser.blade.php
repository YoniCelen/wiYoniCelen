@extends('layouts.app')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Edit Profile</h1>

            <form method="post" action="/user/update/{{ $user->name }}">
                @csrf
                @method('put')
                <div class="field">
                    <label class="label" for="ign">Ign</label>
                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="text"
                            name="ign"
                            id="ign"
                            value="{{ $user->ign }}"
                        >
                        @error('')
                        <p class="help is-danger"></p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="avatar">Avatar</label>
                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="text"
                            name="avatar"
                            id="avatar"
                            value="{{ $user->avatar }}"
                        >
                        @error('')
                        <p class="help is-danger"></p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="bio">Bio</label>
                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="textarea"
                            name="bio"
                            id="bio"
                            value="{{ $user->bio }}"
                        >
                        @error('')
                        <p class="help is-danger"></p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
