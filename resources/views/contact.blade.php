@extends('layouts.app')

@section('content')

<!-- Generic Contact Form -->

<h2>Contact us</h2>

<form action="/contact" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"/>
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control"/>
        <div>{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
        <div>{{ $errors->first('message') }}</div>
    </div>

    @csrf

    <button type="submit" class="btn btn-primary">Send</button>
</form>

@endsection
