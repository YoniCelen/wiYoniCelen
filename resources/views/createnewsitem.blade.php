@extends('layouts.app')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Newsitem</h1>

            <form method="POST" action="/news">

                <div class="field">
                    <label class="label" for=""></label>

                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="text"
                            name=""
                            id=""
                            value="{{ old('') }}"
                        >

                        @error('')
                            <p class="help is-danger"></p>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
