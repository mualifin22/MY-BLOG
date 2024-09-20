@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-8">
                <h1 class="mb=3">{{ $post->title }}</h1>
                <div class="padding-5 mb-1">
                    <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to all my
                        posts</a>
                    <a href="" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</a>
                    <a href="" class="btn btn-danger"><i class="bi bi-x-circle"></i> Delete</a>
                </div>
                <img src="https://picsum.photos/400/" alt="{{ $post->category->name }}" class="image-fluid">

                <article class="my-3 from-sky-5">
                    {!! $post->content !!}
                </article>
            </div>
        </div>
    </div>
@endsection
