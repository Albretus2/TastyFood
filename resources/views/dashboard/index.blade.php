@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-family:'point';font-size:3rem;">Hey, {{ auth()->user()->name }}</h1>
                    <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">Welcome back.. </h5>
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
                <section class="col-lg-12">
                    <div class="card shadow-sm"
                        style="background-color:#eceff5 ;height:15rem;overflow: hidden;border: none;">
                        <div class="card-img-overlay">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <h5><i class="bi bi-quote"></i></h5>
                                    <h5 class="card-title fs-3 quote" id="quote" style="font-family:'point';"></h5>
                                    <p class="card-text author" id="author"></p>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center ">
                                    <img src="{{ asset('assets') }}/dist/img/ramen.png" alt="Tasty-food-ramen"
                                        class="gmbr">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- right col -->
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="card border-0 shadow-sm bg-dark">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between"
                                        style="margin-top: -0.5rem">
                                        <h6 class="mt-1" style="font-family: 'artegra';font-size:0.8rem">Entire your post
                                        </h6>
                                        <div>
                                            <i class="fa-solid fa-circle-dot fs-5"></i>
                                            <a href="/dashboard/posts/create" class="text-light"><i
                                                    class="fa-solid fa-circle-plus fs-5"></i></a>
                                        </div>
                                    </div>
                                    <h1 class="entire">
                                        @if ($entirePost < 10)
                                            {{ '0' . $entirePost }}
                                        @else
                                            {{ $entirePost }}
                                        @endif
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card border-4 border-dark  shadow-none  " style="background-color:transparent">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between"
                                        style="margin-top: -0.5rem">
                                        <h6 class="mt-1 "style="font-family: 'artegra';font-size:0.8rem">Entire your
                                            Gallery
                                        </h6>
                                        <div>
                                            <i class="fa-solid fa-circle-dot fs-5"></i>
                                            <a href="/dashboard/galeri/pictures/create" class="text-dark"><i
                                                    class="fa-solid fa-circle-plus fs-5"></i></a>
                                        </div>
                                    </div>
                                    <h1 class="entire">
                                        @if ($entirePicture < 10)
                                            {{ 0 . $entirePicture }}
                                        @else
                                            {{ $entirePicture }}
                                        @endif
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner shadow">
                            <div class="carousel-item active" data-bs-interval="3000">
                                @if ($carousel[0]->image)
                                    <div class="carddo rounded" alt="..."
                                        style=" background-image: url('{{ asset('storage/' . $carousel[0]->image) }}');">
                                    </div>
                                @else
                                    <div class="carddo rounded" alt="..."
                                        style=" background-image: url('{{ asset('asset/remen_overall.jpg') }}');"></div>
                                @endif
                            </div>
                            @foreach ($carousel->skip(1) as $cars)
                                <div class="carousel-item " data-bs-interval="3000">
                                    @if ($carousel[0]->image)
                                        <div class="carddo rounded" alt="..."
                                            style=" background-image: url('{{ asset('storage/' . $cars->image) }}');"></div>
                                    @else
                                        <div class="carddo rounded" alt="..."
                                            style=" background-image: url('{{ asset('asset/midori.jpg') }}');"></div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <script>
        const text = document.getElementById('quote');
        const author = document.getElementById('author');

        const getNewQuote = async () => {

            var url = "https://type.fit/api/quotes";

            const response = await fetch(url);
            console.log(typeof response);

            const allquotes = await response.json();

            const index = Math.floor(Math.random() * allquotes.length);

            const quote = allquotes[index].text;

            const auth = allquotes[index].author;

            if (auth == null) {
                author = "Anonymous;"
            }

            text.innerHTML = quote;
            author.innerHTML = "- " + auth;
        }
        getNewQuote()
    </script>
@endsection
