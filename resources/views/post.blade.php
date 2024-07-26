@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>
    {{-- <h5>By {{ $post->author }}</h5> --}}
    {!! $post->content !!}
    </article>

<a href="/posts">Back To Blog</a>

@endsection