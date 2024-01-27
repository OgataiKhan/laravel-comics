@extends('layouts.app')

@section('main')
    <main class="main-comics">
        @include('shared.jumbotron')
        <div class="container">
            <h2>Current Series</h2>
            <ul class="products">
                @foreach ($Comics as $Comic)
                <li class="product-card">
                    <div class="product">
                      <div class="product-img">
                        <img src="{{ $Comic['thumb'] }}" alt="{{ $Comic['title'] }}">
                      </div>
                      <p>{{ $Comic['series'] }}</p>
                    </div>
                  </li>
                @endforeach
            </ul>
            @include('shared.load-more')
        </div>
    </main>
@endsection
