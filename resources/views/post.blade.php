@extends('layouts.main')

@section()

<article>
    <h2>{{ $post['title'] }}</h2>
    <h5>By: {{ $post['author'] }}</h5>
    <p>{{ $post['content'] }}</p>
</article>

@endsection