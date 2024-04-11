@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-family:'point';font-size:3rem;">Create New Post</h1>
                    <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">make the news you like</h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-between">
                    <div class="col-lg-4 ">
                        <div class="mb-3 ">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" autocomplete="off"
                                class="form-control shadow-none @error('title')
                                is-invalid
                            @enderror"
                                id="title" name="title" placeholder=".........." data-provide="typeahead"
                                style="background-color: transparent;border-color: #292929;" value="{{ old('title') }}"
                                autofocus required>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control shadow-none " id="slug" name="slug" required
                                readonly values="{{ old('slug') }}">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Post Image Cover</label>
                            <input class="form-control @error('cover') is-invalid @enderror" type="file" id="cover"
                                name="cover" onchange="previewImage()">
                            @error('cover')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                            <div style="height: 15rem;overflow:hidden;" class="mt-2 mb-2">
                                <img class="image-preview img-fluid rounded">
                            </div>
                        </div>
                        <button class="btn btn-dark mb-3 col-md" type="submit" name="submit">Create Post</button>
                    </div>
                    <div class="col-lg-7">
                        <div class="mb-3">
                            @error('body')
                                <P class="text-danger">{{ $message }}</P>
                            @enderror
                            <input id="body" type="hidden" name="body" class="@error('body') is-invalid  @enderror"
                                value="{{ old('body') }}">
                            <trix-editor input="body" style="min-height: 32rem">
                            </trix-editor>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>



    <script>
        // scirpt untuk membuat slug otomatis
        title.addEventListener('keyup', function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        })



        // script untuk preview gambar
        function previewImage() {
            const cover = document.querySelector('#cover')
            const imgPreview = document.querySelector('.image-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(cover.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }

        // script untuk menghilangkan toolbar uploud file di trix
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
