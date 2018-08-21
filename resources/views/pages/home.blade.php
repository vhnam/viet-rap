@extends('layout.app')

@section('page')
    <div hidden id="page">page-homepage</div>
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/homepage.js') }}"></script>
@endsection

@section('content')
    <section class="cover">
        <div class="container">
            <img class="cover__image" src="{{ asset('img/cover.jpg') }}" alt="Cover">
        </div>
    </section>

    <section class="top-songs">
        <div class="container">
            <div id="top-songs"></div>
        </div>
    </section>

    <section class="top-artists">
        <div class="container">
            <div id="top-artists"></div>
        </div>
    </section>
@endsection