@extends('layouts.main_second')
@section('container')
<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-5">
                <div class="card border-0 shadow" style="margin-top: -9rem">
                    <a href="/berita" class=" d-flex text-decoration-none align-items-center  px-2 pt-2" style="color: gray"><i class="bi bi-arrow-left-short fs-3 me-1"></i>Back to all posts</a>
                    <div class="card-body">
                        <h1 class="mb-3" style="font-family: 'point' ;">{{ $news->title }}</h1>    
                        <p class="text-muted" style="font-family: 'point';font-size:0.7rem;">{{ $news->created_at->diffForHumans() }} </p>

                        @if ($news->cover)
                            <div class="gambar rounded mb-1"  style="background-image: url({{ asset('storage/' . $news->cover) }});">
                            </div>
                        @else         
                        @endif
                        <p style="font-family: 'point">Created by {{ $news->user->name }}</p>
                        <article class="mb-4">
                            <small>{!! $news->body !!}</small>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection