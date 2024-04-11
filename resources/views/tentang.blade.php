@extends('layouts.main_second')


@section('container')
    <!-- ///////////////////////////////////////////////// About Section /////////////////////////////////////////////////// -->

    <section class="about">
        <div class="container">
            <div class="row align-items-center pb-5">
                <div class="col-md-5 deskripsi-1" style="margin-top: 5em; ">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="judul1 mb-4">TASTY FOOD</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <p class="mb-4">
                                Experience the unique flavors of traditional Indonesian cuisine with makan khas
                                nusantara! Our
                                delicious dishes feature the perfect blend of spices and herbs from all over the
                                archipelago,
                                giving you a taste of authentic Indonesian culture.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <p style="color: rgb(98, 98, 98);">
                                Enjoy the delicious tastes of sambal, tempe, and more! Our menu is sure to tantalize
                                your
                                tastebuds and give you an unforgettable experience. Come and join us for a culinary
                                journey
                                through Indonesian cuisine.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7" style="margin-top: 5em;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gambar-1"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="gambar-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------------------------------------------------------------------------------------------------- -->


    <!-- ////////////////////////////////////////// Visi Section //////////////////////////////////////////////// -->
    <section class="visi">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7" style="margin-top: 8em;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="gambar-3"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="gambar-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="margin-top: 8em;">
                    <div class="row deskripsi-2">
                        <div class="col-md-12">
                            <div class="card border-0 shadow-none">
                                <h1>VISI</h1>
                                <p>
                                    {{ $about[0]->visi }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------------------------------------------------------------- -->

    <!-- ///////////////////////////////////////////// Misi Section /////////////////////////////////////// -->
    <section class="misi">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>MISI</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="body-misivisi">{{ $about[0]->misi }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="gambar-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ------------------------------------------------- START FOOTER SECTION -------------------------------------------- -->
    <!-- ------------------------------------------------- START FOOTER SECTION -------------------------------------------- -->
@endsection
