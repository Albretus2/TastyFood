@extends('dashboard.layouts.main')

@section('container')

    <!-- Main content -->
    <section class="content">
         <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid ">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0"  style="font-family:'point';font-size:3rem;">Edit Visi and Misi</h1>
                <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">change it to what you want</h5>
                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
      <!-- Main row -->
      <section class="content">
      <div class="container-fluid">
          <form action="/dashboard/abouts/{{ $about->slug }}" method="POST" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="row justify-content-between">
              <div class="col-lg-6 ">
                      <div class="mb-3 d-none">
                          <label for="slug" class="form-label">Slug</label>
                          <input type="text" class="form-control shadow-none"  id="slug" name="slug" required readonly  value="{{ old('slug', $about->slug) }}">
                          @error('slug')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>       
                          @enderror
                      </div>
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <textarea class="form-control shadow-none border-2 border-dark  @error('visi')
                                is-invalid
                            @enderror" id="visi" rows="3" style="height: 15rem" name="visi" required autofocus">{{ old('visi', $about->visi)  }}</textarea>
                            @error('visi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>       
                            @enderror
                        </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                    <label for="misi" class="form-label">Misi</label>
                    <textarea class="form-control shadow-none border-2 border-dark  @error('misi')
                        is-invalid
                    @enderror" id="misi" rows="3" style="height: 15rem"  name="misi" required>{{ old('misi', $about->misi) }} </textarea>
                    @error('misi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>       
                    @enderror
                  </div>
              </div>
              <div class="col-lg-12">
                <button class="btn btn-dark mb-3 col-12" style="height: 3rem" type="submit" name="submit">Change</button>
              </div>      
          </div>
          </form>
      </div>
     </section>
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


  </script>
@endsection