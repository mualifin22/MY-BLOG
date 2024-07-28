@extends('layouts.main')

@section('container')
<h1 class="mb=5">{{ $post->title }}</h1>

<p>By. Inuma in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

{!! $post->content !!}

<a href="/posts">Back To Blog</a>

@endsection