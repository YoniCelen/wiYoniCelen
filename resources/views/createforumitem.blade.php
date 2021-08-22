@extends('layouts.app')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Forum Post</h1>

            <form method="post" action="/forum">
                @csrf
                <div class="field">
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old('') }}"
                        >
                        @error('')
                        <p class="help is-danger"></p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="text">Text</label>
                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="textarea"
                            name="text"
                            id="text"
                            value="{{ old('') }}"
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
