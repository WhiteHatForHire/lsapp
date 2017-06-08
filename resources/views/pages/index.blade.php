@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <h3><a href="https://github.com/WhiteHatForHire" target="_blank">Web Developer,
        </a> <a href="/about"  target="_blank">Entrepreneur,</a> <a href="https://soundcloud.com/mellowtonemusic" target="_blank">Music Producer</a></h3>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection
