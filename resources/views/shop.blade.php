@extends('layouts.app')

@section('content')

    <h2>Shop</h2>
    <br>
    <br>
    <div>
        <form action="/payment" method="POST">
            <div class="form-group">
                <h4>Buy lifetime membership.</h4>
            </div>

            @csrf

            <button type="submit" class="btn btn-primary">Buy</button>
        </form>
    </div>


@endsection
