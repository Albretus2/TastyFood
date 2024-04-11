@extends('auth.main')

@section('container')
    <section class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ">
                    <div class="btn btn-light rounded  mb-2 ps-4 pe-4">
                        <a href="/login"><i class="fa-solid fa-arrow-left fa-xl text-dark"></i></a>
                    </div>
                    <div class="card mb-3 border-0 shadow" style="background: rgba(255, 255, 255, 0.68);">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="gambar"></div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="card-body text-center">
                                    <h2 class="card-title" style="font-family: 'artegra';">Register
                                    </h2>
                                    <p style="font-family: 'point';margin-top: -0.5em;font-size: 0.8em;">Let's go
                                        Started</p>
                                    <form class="text-start" action="/register" method="POST">
                                        @csrf
                                        <div class="mb-3 ">
                                            <label for="name" class="form-label">Username</label>
                                            <input type="text" autocomplete="off"  class="form-control shadow-none @error('name')
                                                is-invalid
                                            @enderror" id="name" name="name"
                                                placeholder=".........." data-provide="typeahead"
                                                style="background-color: transparent;border-color: #292929;" value="{{ old('name') }}" autofocus required>
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>       
                                                @enderror
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control shadow-none @error('email')
                                                is-invalid
                                            @enderror" id="email"
                                                placeholder=".........." data-provide="typeahead"
                                                style="background-color: transparent;border-color: #292929;" value="{{ old('email') }}"> 
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
                                                style="background-color: transparent;border-color: #292929;" required>
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>       
                                                @enderror
                                        </div>
                                        <button type="submit" class="btn btn-dark col-12 shadow-none">sign up</button>
                                        <p class="text-center mt-2">Already have an accound? <a href="/login"
                                                class="text-dark">Log in</a></p>
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