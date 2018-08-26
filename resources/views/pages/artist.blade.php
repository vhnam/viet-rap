@extends('layout.app')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/artists.js') }}"></script>
@endsection

@section('content')
    <section class="cover">
        <div id="cover"></div>
    </section>

    <section class="profile">
        <div class="container">
            <div id="profile"></div>
        </div>
    </section>
@endsection