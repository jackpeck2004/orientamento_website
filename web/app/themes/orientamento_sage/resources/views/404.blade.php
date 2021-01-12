@extends('layouts.app')

@section('content')
    @include('partials.page-header')
    <style>
        .error {
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .error>h1 {
            font-size: 40vw;
            color: #dbdbdb;
            font-weight: bold;
            position: absolute;
            z-index: -1;
        }

        .overlay {
            position: relative;
            z-index: 100;
            text-align: center;
            /*background: white;*/
            font-size: 3rem;
            display: flex;
            justify-content: center;
            align-items: center;
            /*width: 100vw;*/
        }

    </style>
    <div class="error">
        <h1>404</h1>
        <div class="overlay">
            <p>This page does not seem to exist, maybe try going <a href="{{ get_home_url() }}">back</a>.</p>
        </div>
    </div>

@endsection
