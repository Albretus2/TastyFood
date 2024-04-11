  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid ">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0"  style="font-family:'point';font-size:3rem;">Kelola Gallery</h1>
        <h5 style="font-size: 1rem;margin:0.6rem 0 0.8rem 0;color:#777777">Manage your {{ Request::is('dashboard/galeri/pictures') ? "Pictures" : "Carousel" }}</h5>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard/galeri/pictures" class="{{ Request::is('dashboard/galeri/pictures*') ? 'text-dark' : '' }} text-decoration-none">All pictures</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/galeri/carousel" class="{{ Request::is('dashboard/galeri/carousel*') ? 'text-dark' : '' }} text-decoration-none">Carousel</a></li>
          </ol>
        </nav>
        </div><!-- /.col -->
    </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->