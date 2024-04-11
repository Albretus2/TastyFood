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
                @foreach ($carousels as $cars)
                    <section class="col-lg-12">

                        @if ($cars->image)
                            <button type="button" class="card card_pictures  border-0 col-12 shadow-none"
                                data-bs-toggle="modal" data-bs-target="#{{ $cars->slug }}"
                                style="background-image: url({{ asset('storage/' . $cars->image) }});">
                            </button>
                        @else
                            <button type="button" class="card card_pictures  border-0 col-12 shadow-none"
                                data-bs-toggle="modal" data-bs-target="#{{ $cars->slug }}"
                                style="background-image: url({{ asset('asset/midori.jpg') }});">
                            </button>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="{{ $cars->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content shadow-sm border-0 text-start  rounded-3">
                                    <div class="modal-body">
                                        <h1 class="modal-title fs-6  mb-3" id="exampleModalLabel">Title :{{ $cars->title }}
                                        </h1>
                                        <a href="/dashboard/galeri/carousel/{{ $cars->slug }}/edit"
                                            class="btn btn-light  col-12 mb-2 rounded-2 text-start">Edit</a>
                                        <form action="/dashboard/galeri/carousel/{{ $cars->slug }}" method="POST">
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
                <section class="col-lg-12">
                    <a href="/dashboard/galeri/carousel/create"
                        class="card_pictures_button  col-12 shadow-none text-dark rounded-1">
                        <i class="fa-solid fa-plus fa-lg fs-2"></i>
                    </a>
                </section>


                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
