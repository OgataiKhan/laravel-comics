@extends('layouts.app')

@section('main')
    <main class="main-welcome">
        @include('shared.jumbotron')
        <div class="container">
            <h2 class="welcome-title">Welcome to DC comics</h2>
            <p class="welcome-paragraph">Use the navbar above to navigate the site</p>
        </div>
    </main>
@endsection