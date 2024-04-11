@extends('dashboard.layouts.main')

@section('container')

    <!-- Main content -->
    <section class="content">
         <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0"  style="font-family:'point';font-size:3rem;">Create new Picture</h1>
                <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">make the picture you like</h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
`
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
      <!-- Main row -->
      <section class="content">
      <div class="container-fluid">
          <form action="/dashboard/galeri/pictures" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row justify-content-between">
              <div class="col-lg-4 ">
                      <div class="mb-3 ">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" autocomplete="off"  class="form-control shadow-none @error('title')
                              is-invalid
                          @enderror" id="title" name="title"
                              placeholder=".........." data-provide="typeahead"
                              style="background-color: transparent;border-color: #292929;" value="{{ old('title') }}" autofocus required>
                              @error('title')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>       
                              @enderror
                      </div>
                      <div class="mb-3">
                          {{-- <label for="slug" class="form-label">Slug</label> --}}
                          <input type="text" class="form-control shadow-none d-none" id="slug" name="slug" required readonly  values="{{ old('slug') }}">
                          @error('slug')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>       
                          @enderror
                      </div>
                  
                      <button class="btn btn-dark mb-3 col-md" type="submit" name="submit">Create Image</button>
              </div>
              <div class="col-lg-7">
                <div class="mb-3">
                    <label for="image" class="form-label">Add Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()" required>
                    @error('image')         
                    <p class="text-danger">
                      {{ $message }}
                    </p> 
                    @enderror
                    <div style="height: 32rem;overflow:hidden;" class="mt-2 mb-2">
                        <img class="image-preview img-fluid rounded">
                    </div>
                </div>
              </div>
          </div>
          </form>
      </div>
  </section>
      <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->

  <script>
     // scirpt untuk membuat slug otomatis
     title.addEventListener('keyup', function(){
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        })



         // script untuk preview gambar
        function previewImage(){
            const cover = document.querySelector('#image')
            const imgPreview = document.querySelector('.image-preview')

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(cover.files[0]);

            oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            }

        }

  </script>
@endsection