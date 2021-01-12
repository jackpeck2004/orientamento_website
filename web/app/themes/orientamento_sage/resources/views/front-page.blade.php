@extends('layouts.app')

@section('content')
    @include('partials.page-header')

    <main class="home">
        <div class="front-page">
            <div class="bg-image">
                <div class="content">
                    <div class="container">
                        <h1>{!! the_title() !!}</h1>
                    </div>
                </div>
            </div>
            <div class="body container text-focus-in">
                {!! the_content() !!}
            </div>
        </div>
    </main>


@endsection
