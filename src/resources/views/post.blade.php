@extends('layout')

@section('content')
    <h1>Hello world</h1>

    <article>
        <h2>{{ $post->title }}</h2>
        <div>{!! $post->body !!}</div>
    </article>

    <a href="/">Go back</a>
@endsection
