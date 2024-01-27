@extends('layouts.app')

@section('main')
    <main class="main-welcome">
        @include('shared.jumbotron')
        <div class="container">
            <h2 class="welcome-title">Welcome to DC comics</h2>
            <div class="welcome-flex">
                <div class="about">
                    <p class="about-paragraph">Founded in 1934 as National Allied Publications, DC Comics has grown into one
                        of
                        the largest and most influential comic book publishers in the world. Known for introducing iconic
                        superheroes such as Superman, Batman, and Wonder Woman, DC has been a pioneering force in the comic
                        book
                        industry.</p>
                    <p class="about-paragraph">DC's journey began with the publication of 'New Fun: The Big Comic Magazine'
                        in
                        1935, but it was the debut of Superman in 'Action Comics #1' in 1938 that truly revolutionized the
                        industry, giving birth to the superhero genre as we know it. Following Superman's success, DC
                        introduced
                        other legendary characters, including Batman in 'Detective Comics #27' and Wonder Woman in 'All Star
                        Comics #8'.</p>
                    <p class="about-paragraph">Over the decades, DC Comics has expanded its universe with a rich array of
                        characters, each with complex backstories and intricate worlds. The DC Universe is known for its
                        dark,
                        gritty, and often philosophical storytelling, setting it apart from other comic book realms.</p>
                    <p class="about-paragraph">DC has also been a leader in adapting its characters to other media, including
                        television, movies, and video games, making its characters beloved by millions around the world. The
                        company’s commitment to diversity and evolving narratives continues to keep it at the forefront of
                        the
                        comic book industry.</p>
                    <p class="about-paragraph">As it continues to inspire and entertain fans old and new, DC Comics remains a
                        titan in the world of storytelling, forever shaping the landscape of pop culture.</p>
                </div>
                <div class="about-img">
                    <img src="{{ Vite::asset('resources/img/action-comics-1-cover.jpg') }}" alt="Action Comics 1">
                </div>
            </div>
        </div>
    </main>
@endsection
