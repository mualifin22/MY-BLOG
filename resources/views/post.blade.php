@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb=3">{{ $post->title }}</h1>

                <p>By. <a href="/authors/{{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a></p>

                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjGjrwsmm29vgK1pSkiSyIrK5QE112njou2Q&s" alt="{{ $post->category->name }}" class="image-fluid">

                <article class="my-3 from-sky-5">
                    {!! $post->content !!}
                </article>

                <a href="/posts" class="text-decoration-none d-block mt-3">Back To Blog</a>
            </div>
        </div>
    </div>
@endsection
