@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-family:'point';font-size:3rem;">Kelola Postingan</h1>
                    <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">manage your posts</h5>
                    <a href="/dashboard/posts/create" class="btn btn-dark shadow" style="color:white;font-size:1rem">
                        <i class="bi bi-file-plus me-1"></i> New Post
                    </a>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                @if ($posts->count())
                    <section class="col-lg-12">

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('delete'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('delete') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('update'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session('update') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @foreach ($posts as $post)
                            <div class="card shadow-sm border-0" style="background: #eceff5">
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        {{-- <div class="col-md-2">
                                        <img src="{{ asset('asset/daharen2.jpg') }}" alt=".." class="img-rounded img-fluid" width="200px">
                                        </div> --}}
                                        <div class="col-7">
                                            <h5>{{ $post->title }}</h5>
                                            <p class="text-secondary">{{ $post->created_at->diffForHumans() }}</p>
                                        </div>
                                        <div class="col-1 d-flex justify-content-end align-items-center">
                                            <div class="dropstart">
                                                <button type="button" class="border-0" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <h4><i class="bi bi-three-dots-vertical"></i></h4>
                                                </button>
                                                <ul class="dropdown-menu border-0">
                                                    <li><a href="/dashboard/posts/{{ $post->slug }}"
                                                            class="dropdown-item"><i class="bi bi-view-stacked me-2"></i>
                                                            Open</a></li>
                                                    <li><a href="/dashboard/posts/{{ $post->slug }}/edit"
                                                            class="dropdown-item"><i class="bi bi-pencil-square me-2"></i>
                                                            Edit</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="border-0 "
                                                                style="background: transparent">
                                                                <i class="bi bi-trash me-2"
                                                                    style="margin-left: -0.3rem"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                @else
                    <section class="col-lg-12">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-6" style="margin-top: 4rem">
                                <img src="{{ asset('asset/gojo.png') }}" alt="" width="100px" class="img-fluid">
                                <h6 class="mt-4" style="color:#777777">You don't have a single post yet, <b>let's create
                                        one</b>
                                </h6>
                            </div>
                        </div>
                    </section>
                @endif
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
