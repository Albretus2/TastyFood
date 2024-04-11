@extends('dashboard.layouts.main')

@section('container')
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 pb-5">
                    <div class="card shadow-none border-0">
                        <div class="card-body">
                            <a href="{{ url()->previous() }}" class="text-decoration-none fs-5 me-5 d-flex align-items-center"
                                style="color:#777777"><i class="fa-solid fa-arrow-left-long me-3"></i><small
                                    style="margin-bottom: 0.2rem">Back to all
                                    Posts</small></a>
                            <h1>{{ $posts->title }}</h1>
                            @if ($posts->cover)
                                <div class="rounded"
                                    style="background-image: url({{ asset('storage/' . $posts->cover) }});height:18rem;background-position:center;background-repeat: no-repeat;background-size: cover;">
                                </div>
                            @else
                            @endif
                            <div class="d-flex align-items-center mt-2">
                                <h5 style="font-size: 1rem;color:black" class="me-3"><i
                                        class="fa-solid fa-arrow-turn-down me-1"></i><i
                                        class="fa-solid fa-arrow-turn-down me-1"></i><i
                                        class="fa-solid fa-arrow-turn-down"></i></h5>
                                <form action="/dashboard/posts/{{ $posts->slug }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="color:#777777;margin-top:-0.8rem;" class="btn p-0 me-2 "
                                        type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                                <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="text-decoration-none  me-3"
                                    style="color:#777777;margin-top:-0.5rem;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <h6 style="color:#777777;">
                                    {{ $posts->created_at->diffForHumans() }}</h6>
                            </div>
                            <article class="mt-3">
                                <small>{!! $posts->body !!}</small>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
