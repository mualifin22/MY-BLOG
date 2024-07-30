@extends('layouts.main')

@section('container')
<h1 class="mb=5">{{ $post->title }}</h1>

<p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

{!! $post->content !!}

<a href="/posts" class="text-decoration-none d-block mt-3">Back To Blog</a>

@endsection