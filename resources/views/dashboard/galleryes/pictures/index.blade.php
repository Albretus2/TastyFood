@extends('dashboard.layouts.main')

@section('container')
    @include('dashboard.galleryes.header')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @if (session()->has('create'))
                <div class="alert bg-dark alert-dismissible fade show" role="alert">
                    {{ session('create') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert bg-dark alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('update'))
                <div class="alert bg-dark alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                @if ($picture->count())
                    @foreach ($picture as $pic)
                        <section class="col-lg-4">
                            <!-- Button trigger modal -->
                            @if ($pic->image)
                                <button type="button" class="card card_pictures  border-0 col-12 shadow-none"
                                    data-bs-toggle="modal" data-bs-target="#{{ $pic->slug }}"
                                    style="background-image: url({{ asset('storage/' . $pic->image) }});">
                                </button>
                            @else
                                <button type="button" class="card card_pictures  border-0 col-12 shadow-none"
                                    data-bs-toggle="modal" data-bs-target="#{{ $pic->slug }}"
                                    style="background-image: url({{ asset('asset/midori.jpg') }});">
                                </button>
                            @endif
                            <!-- Modal -->
                            <div class="modal fade" id="{{ $pic->slug }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content shadow-sm border-0 text-start  rounded-3">
                                        <div class="modal-body">
                                            <h1 class="modal-title fs-6  mb-3" id="exampleModalLabel">Title :
                                                {{ $pic->title }}</h1>
                                            <a href="/dashboard/galeri/pictures/{{ $pic->slug }}/edit"
                                                class="btn btn-light  col-12 mb-2 rounded-2 text-start">Edit</a>
                                            <form action="/dashboard/galeri/pictures/{{ $pic->slug }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-light  col-12 text-start rounded-2"">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach
                @else
                    <section class="col-lg-12">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-6" style="margin-top: 4rem">
                                <img src="{{ asset('asset/stikMan.png') }}" alt="" width="150px"
                                    class="img-fluid">
                                <h6 class="mt-4" style="color:#777777">Nothing here, <b>let's
                                        create
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
