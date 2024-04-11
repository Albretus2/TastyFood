@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0" style="font-family:'point';">{{ $contact->subject }} ~</h4>
                    <div class="d-flex align-items-center">
                        <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777" class="me-3"><i
                                class="fa-solid fa-arrow-turn-down me-1"></i><i
                                class="fa-solid fa-arrow-turn-down me-1"></i><i class="fa-solid fa-arrow-turn-down"></i>
                        </h5>
                        <form action="/dashboard/contact/{{ $contact->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777" class="btn p-0 me-3"
                                type="submit"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                        <h6 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">
                            {{ $contact->created_at->diffForHumans() }}</h6>

                    </div>
                    <div class="m-0 d-flex align-items-center" style="font-family:'point';">
                        <h1><i class="fa-solid fa-clipboard-user fs-2"></i></h1>
                        <h6 class=" mt-2 ms-2"> {{ $contact->name }} - <span style="font-size: 0.9rem;color:#777777">
                                ( {{ $contact->email }} )
                            </span></h6>
                    </div>
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

                <!-- Left col -->
                <section class="col-lg-12">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <h6>{!! $contact->message !!}</h6>
                        </div>
                    </div>
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
