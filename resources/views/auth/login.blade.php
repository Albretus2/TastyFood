@extends('auth.main')


@section('container')
    <section class="main">
        <div class="container">
            <div class="row justify-content-center">
             
                <div class="col-md-7">
                    <div class="btn btn-light rounded  mb-2 ps-4 pe-4">
                        <a href="/home"><i class="fa-solid fa-arrow-left fa-xl text-dark"></i></a>
                    </div>
             
                    @if (session()->has('success'))
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <div style="font-family: 'point">
                                <i class="bi bi-cup-hot-fill me-2"></i> {{ session('success') }}
                            </div>
                        </div>
                     @endif
                    @if (session()->has('error'))
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div style="font-family: 'point">
                                <i class="bi bi-exclamation-diamond-fill me-2"></i> {{ session('error') }}
                            </div>
                        </div>
                     @endif

                    <div class="card mb-3 border-0 shadow" style="background: rgba(255, 255, 255, 0.68);">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="gambar1"></div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="card-body text-center">
                                    <h2 class="card-title" style="font-family: 'artegra';">Welcome back
                                    </h2>
                                    <p style="font-family: 'point';margin-top: -0.5em;font-size: 0.8em;">please enter
                                        your details.</p>
                                    <form class="text-start" action="/login"  method="POST">
                                        @csrf
                                        <div class="mb-3 ">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" autocomplete="off"  class="form-control shadow-none @error('email')
                                                is-invalid
                                            @enderror" id="email"
                                                placeholder=".........." data-provide="typeahead"
                                                style="background-color: transparent;border-color: #292929;" autofocus value="{{ old('email') }}">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>       
                                                @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control shadow-none @error('password')
                                                is-invalid
                                            @enderror"
                                                id="password" placeholder=".........."
                                                style="background-color: transparent;border-color: #292929;">
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>       
                                                @enderror
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-dark col-12 shadow-none">Log in</button>
                                        <p class="text-center mt-2">don't have an account? <a href="/register"
                                                class="text-dark">Sign up</a> </p>
                                    </form>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection