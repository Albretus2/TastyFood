@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-family:'point';font-size:3rem;">Kotak masuk</h1>
                    <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777"><i
                            class="fa-solid fa-arrow-turn-down me-1"></i><i class="fa-solid fa-arrow-turn-down me-1"></i><i
                            class="fa-solid fa-arrow-turn-down"></i></h5>
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
                <div class="col-12">
                    @if (session()->has('delete'))
                        <div class="alert bg-dark alert-dismissible fade show mb-3" role="alert">
                            {{ session('delete') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>

                @if ($contacts->count())
                    <!-- Left col -->
                    @foreach ($contacts as $cont)
                        <section class="col-lg-12">
                            <a href="/dashboard/contact/{{ $cont->id }}" class="text-decoration-none ">
                                <div class=" card border-0 shadow-sm">
                                    <div class="card-body  align-items-center d-flex justify-content-between  ">
                                        <h6 class="col-2 ">~ {{ $cont->name }}</h6>
                                        <h6 class="subject col-6 " style="color:#777777">{{ $cont->subject }}</h6>
                                        <h6 class="col-2 text-end " style="font-size: 0.8rem;color:#777777">
                                            {{ $cont->created_at->diffForHumans() }}</h6>
                                        <form action="/dashboard/contact/{{ $cont->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn col-2 "><i
                                                    class="fa-solid fa-trash-arrow-up "></i></button>
                                        </form>

                                    </div>
                                </div>
                            </a>
                        </section>
                    @endforeach
                    <!-- right col -->
                @else
                    <section class="col-lg-12">
                        <div class="row justify-content-center text-center">
                            <div class="col-md-6" style="margin-top: 4rem">
                                <img src="{{ asset('asset/emptyState.png') }}" alt="" width="300px"
                                    class="img-fluid">
                                <h6 class="mt-4" style="color:#777777">OH NO ! you don't have a message yet</h6>
                            </div>
                        </div>
                    </section>
                @endif
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
