@extends('layouts.app')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New FAQ item</h1>

            <form method="post" action="/faq">
                @csrf
                <div class="field">
                    <label class="label" for="question">Question</label>
                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="textarea"
                            name="question"
                            id="question"
                            value="{{ old('') }}"
                        >
                        @error('')
                        <p class="help is-danger"></p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>
                    <div class="control">
                        <input
                            class="input @error('') is-danger @enderror"
                            type="textarea"
                            name="answer"
                            id="answer"
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
