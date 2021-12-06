@extends('layout')

@section('content')
    <h1>Hello world</h1>

    <p>
        By <a href="">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    <article>
        <h2>{{ $post->title }}</h2>
        <div>{!! $post->body !!}</div>
    </article>

    <a href="/">Go back</a>
@endsection
