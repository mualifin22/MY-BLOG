@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <!-- Featured Post -->
        <div class="card mb-3" style="border: 1px solid #ddd; border-radius: 0.25rem; overflow: hidden;">
            <div class="card-img-top-container" style="height: 300px; overflow: hidden;">
                @if ($posts[0]->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                            class="image-fluid">
                    </div>
                @else
                    <img src="https://picsum.photos/400/" alt="{{ $posts[0]->category->name }}"
                        class="image-fluid mt-3"><img src="https://picsum.photos/1000" class="card-img-top"
                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;"
                        alt="{{ $posts[0]->category->name }}">
                @endif

            </div>
            <div class="card-body text-center" style="padding: 1.25rem;">
                <h3 class="card-title" style="margin-bottom: 0.75rem;">{{ $posts[0]->title }}</h3>
                <p style="margin-bottom: 1rem;">
                    <small class="text-muted">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none"
                            style="color: #6c757d;">
                            {{ $posts[0]->author->name }}
                        </a> in
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none"
                            style="color: #6c757d;">
                            {{ $posts[0]->category->name }}
                        </a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text" style="margin-bottom: 1.25rem;">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary"
                    style="color: #fff; background-color: #007bff; border: none; padding: 0.5rem 1rem; text-align: center; border-radius: 0.25rem; display: inline-block;">
                    Read more...
                </a>
            </div>
        </div>

        <!-- Other Posts -->
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="card-img-top">
                            @else
                                <img src="https://picsum.photos/1000" class="card-img-top"
                                    alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/posts?author={{ $post->author->username }}"
                                            class="text-decoration-none">
                                            {{ $post->author->name }}
                                        </a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
