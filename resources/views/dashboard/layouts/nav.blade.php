 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white border-0 mt-3 mb-3">
    <!-- Left navbar links -->
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <i class="bi bi-arrow-bar-right nav-link fs-2 ms-2" data-widget="pushmenu" role="button"
          style="margin-top: -1rem;"></i>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ms-auto ">
      @if (request()->is('dashboard/galeri/pictures'))
      <li class="nav-item me-2">
        <a href="/dashboard/galeri/pictures/create" class="btn text-light form-control shadow-none" style="background-color: #292929;"><i class="bi bi-plus-square me-2"></i> Create New</a>
      </li>
      @endif
      @if (request()->is('dashboard/abouts'))
      <li class="nav-item me-2">
        <a href="/dashboard/abouts/{{ $about[0]->slug }}/edit" class="btn text-light form-control shadow-none" style="background-color: #292929;"><i class="fa-solid fa-wrench me-1"></i> Change</a>
      </li>
      @endif
    
      <!-- Navbar Search -->
      <li class="nav-item me-3">
        <form action="" class="d-flex" role="search">
          <div class="input-group">
            <button class="input-group-text" type="button" id="basic-addon1"
              style="background-color: rgb(225, 225, 225);"><i class="bi bi-search"></i></button>
            <input type="search" class="form-control shadow-none border-0" placeholder="Search" aria-label="Search"
              aria-describedby="basic-addon1" style="background-color: rgb(225, 225, 225)">
          </div>
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->