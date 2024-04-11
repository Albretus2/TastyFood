@extends('layouts.main_second')



@section('container')
    <!-- -------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- ///////////////////////////////////////// Kontak Kami Section /////////////////////////////////////// -->

    <section class="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-12 title">
                    <h1>KONTAK KAMI</h1>
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show border-0" role="alert">
                            <strong><i class="bi bi-arrow-up-right-square-fill me-1"></i></strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <form action="/kontak" method="POST" name="submit-to-google-sheet" class="sending">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            {{-- ----------------------------- --}}
                            <div class="col-md-12">
                                <input type="text"
                                    class="input-01 form-control shadow-none border-dark @error('subject')
                                    is-invalid
                                @enderror"
                                    id="subject" name="subject" placeholder="Subject" autocomplete="off"
                                    value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- ------------------------------- --}}
                        </div>
                        <div class="row">
                            {{-- ------------------------------- --}}
                            <div class="col-md-12">
                                <input type="text"
                                    class="input-01 form-control shadow-none border-dark @error('name')
                                    is-invalid
                                @enderror"
                                    id="name" name="name" placeholder="Name" autocomplete="off"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- ------------------------------- --}}
                        </div>
                        <div class="row">
                            {{-- ------------------------------- --}}
                            <div class="col-md-12">
                                <input type="email"
                                    class="input-01 form-control shadow-none border-dark @error('email')
                                    is-invalid
                                @enderror"
                                    id="email" name="email" placeholder="Email" autocomplete="off">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- ------------------------------- --}}
                        </div>
                    </div>
                    {{-- ------------------------------- --}}
                    <div class="col-md-6">
                        <textarea
                            class="form-control input-02 shadow-none border-dark @error('message')
                            is-invalid
                        @enderror"
                            name="message" id="message" cols="2" rows="10" placeholder="Message"></textarea>
                        @error('message')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- ------------------------------- --}}
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-lg-12 justify-content-center d-flex">
                        <button type="submit" class="cta-01 btn-submit">
                            KIRIM
                        </button>
                        <button class="cta-01 btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status">Loading...</span>
                        </button>
                    </div>

                </div>
            </form>
            <div class="row justify-content-center text-center" style="margin-top: 10em; margin-bottom: 7em;">
                <div class="col-md-4">
                    <img src="../asset/email.png" alt="" height="90vh" class="mb-3">
                    <h2>EMAIL</h2>
                    <p>TastyFood@gmail.com</p>
                </div>
                <div class="col-md-4">
                    <img src="../asset/telepon.png" alt="" height="90vh" class="mb-3">
                    <h2>PHONE</h2>
                    <p>+62 812 3456 7890</p>
                </div>
                <div class="col-md-4 ">
                    <img src="../asset/map.png" alt="" height="90vh" class="mb-3">
                    <h2>LOCATION</h2>
                    <p>Kota Bandung, Jawa Barat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------------------------------------------------------------------------------------------------------------------- -->

    <!-- ///////////////////////////////// MapS Section ///////////////////////////////////////////////////////////////// -->

    <section class="mapss">
        <div class="container">
            <div class="row justify-content-center">
                <iframe class="frame col-md-8"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7921.155230927552!2d107.65670027420228!3d-6.940976679940745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCYBERLABS%20-%20Jasa%20Digital%20Marketing%20%7C%20Jasa%20Pembuatan%20Website%20%7C%20Jasa%20Pembuatan%20Aplikasi!5e0!3m2!1sid!2sid!4v1689908834988!5m2!1sid!2sid"
                    width="" height="360" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>



    <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbxz8NyJAH5r90ln1MIptjV9of92lHaFugAbj7gz3-neu-kr5KqZpx4Fwz0yC-6YJlBD/exec'
        const form = document.forms['submit-to-google-sheet']

        form.addEventListener('submit', e => {

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    console.log('Success!', response)
                    sending.reset()
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
@endsection
