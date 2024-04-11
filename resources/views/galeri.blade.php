@extends('layouts.main_second')





@section('container')
    <!-- ////////////////////////////////// Carousel Gallery Section ///////////////////////////////////////////// -->



    <section class="carousel-big">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-12"data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300"
                    data-aos-offset="0">

                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active" data-bs-interval="5000">

                                @if ($carousel[0]->image)
                                    <div class="hvr_galry img-crsl-1"
                                        style="background-image: url({{ asset('storage/' . $carousel[0]->image) }})"
                                        data-bs-placement="top" data-bs-title="{{ $carousel[0]->title }}"></div>
                                @else
                                    <div class="hvr_galry img-crsl-1"
                                        style="background-image: url({{ asset('asset/midori.jpg') }})"
                                        data-bs-placement="top" data-bs-title="{{ $carousel[0]->title }}">

                                    </div>
                                @endif

                            </div>

                            @foreach ($carousel->skip(1) as $cars)
                                <div class="carousel-item " data-bs-interval="5000">

                                    @if ($cars->image)
                                        <div class="hvr_galry img-crsl-1"
                                            style="background-image: url({{ asset('storage/' . $cars->image) }})"
                                            data-bs-placement="top" data-bs-title="{{ $cars->title }}"></div>
                                    @else
                                        <div class="hvr_galry img-crsl-1"
                                            style="background-image: url({{ asset('asset/oren.jpg') }})"
                                            data-bs-placement="top" data-bs-title="{{ $cars->title }}"></div>
                                    @endif



                                </div>
                            @endforeach

                        </div>

                        <button class="carousel-control-prev arrow1" type="button"
                            data-bs-target="#carouselExampleInterval" data-bs-slide="prev">

                            <svg aria-hidden="false" xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                                viewBox="0 0 91 91" fill="none">

                                <g filter="url(#filter0_d_19_601)">

                                    <circle cx="43.5" cy="41.5" r="37.5" fill="white" />

                                </g>

                                <path d="M51 28L37 41.5L51 55" stroke="black" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />

                                <defs>

                                    <filter id="filter0_d_19_601" x="0" y="0" width="91" height="91"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">

                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />

                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />

                                        <feOffset dx="2" dy="4" />

                                        <feGaussianBlur stdDeviation="4" />

                                        <feComposite in2="hardAlpha" operator="out" />

                                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />

                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_19_601" />

                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_19_601"
                                            result="shape" />

                                    </filter>

                                </defs>

                            </svg>

                        </button>

                        <button class="carousel-control-next arrow2" type="button"
                            data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <svg class="rond" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" width="70"
                                height="70" viewBox="0 0 91 91" fill="none">

                                <g filter="url(#filter0_d_19_601)">

                                    <circle cx="43.5" cy="41.5" r="37.5" fill="white" />

                                </g>

                                <path d="M51 28L37 41.5L51 55" stroke="black" stroke-width="4" stroke-linecap="round"
                                    stroke-linejoin="round" />

                                <defs>

                                    <filter id="filter0_d_19_601" x="0" y="0" width="91" height="91"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">

                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />

                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />

                                        <feOffset dx="2" dy="4" />

                                        <feGaussianBlur stdDeviation="4" />

                                        <feComposite in2="hardAlpha" operator="out" />

                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />

                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_19_601" />

                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_19_601"
                                            result="shape" />

                                    </filter>

                                </defs>

                            </svg>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->



    <!-- //////////////////////////////////////////////// Overall img section /////////////////////////////////////////////// -->



    <section class="overall-img">

        <div class="container">

            <div class="row mb-3">

                @foreach ($picture as $pic)
                    <div class="col-lg-3" data-aos="fade-down" data-aos-duration="1000">

                        @if ($pic->image)
                            <div class="hvr_galry img-01 mb-4"
                                style="background-image:url({{ asset('storage/' . $pic->image) }});"
                                data-bs-placement="top" data-bs-title="{{ $pic->title }}"></div>
                        @else
                            <div class="hvr_galry img-01 mb-4"
                                style="background-image: url({{ asset('asset/remen_overall.jpg') }})"
                                data-bs-placement="top" data-bs-title="{{ $pic->title }}">

                            </div>
                        @endif

                    </div>
                @endforeach

            </div>

    </section>



    <!-- -------------------------------------------------------------------------------------------------------------------------- -->





    <!-- ////////////////////////////////////////////// Footer Section ////////////////////////////////////////////////////////////////// -->
@endsection
