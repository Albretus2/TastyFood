@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0"  style="font-family:'point';font-size:3rem;">Kelola Visi dan Misi</h1>
            <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">Manage visi and misi</h5>
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
                @if (session()->has('update'))    
                <div class="alert bg-dark alert-dismissible fade show" role="alert">
                  {{ session('update') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <!-- Left col -->
                @foreach ($about as  $a)
                <section class="col-lg-6">
                  <div class="card-1  card shadow-sm border-0"  style="background: #eceff5;">
                    <div class="card-body" >  
                      <h1>Visi</h1>
                      <p>{{  $a->visi   }}</p>      
                    </div>
                  </div>
                </section>
                <section class="col-lg-6">
                  <div class="card shadow-sm border-0"  style="background: #eceff5">
                    <div class="card-body">  
                      <div class="row justify-content-between">
                        <div >
                            <h1>Misi</h1>
                            <p>{{  $a->misi  }}</p>
                        </div>
                      </div>       
                    </div>
                  </div>
                </section>
                @endforeach
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->


@endsection