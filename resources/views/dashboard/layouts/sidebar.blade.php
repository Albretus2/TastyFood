<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4 shadow-none "
    style="border-right: 1px solid rgb(237, 237, 237);overflow: hidden;">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link text-decoration-none border-0 mb-4 mt-4 justify-content-center d-flex">
        <img src="{{ asset('assets') }}/dist/img/logo.png" alt="Tasty Food Logo" class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'bg-dark' : '' }} mb-2"
                        style="padding: 0.8rem;">
                        <i class="nav-icon fas fa-ghost"style="margin-right: 1rem;"></i>
                        {{-- <i class="nav-icon fa-solid fa-server" style="margin-right: 1rem;"></i> --}}
                        <p class="side-text">
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/posts"
                        class="nav-link  {{ Request::is('dashboard/posts*') ? 'bg-dark' : '' }} mb-2"
                        style="padding: 0.8rem;">
                        <i class="nav-icon fas fa-torii-gate" style="margin-right: 1rem;"></i>
                        <p class="side-text">
                            Post
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/galeri/pictures"
                        class="nav-link  {{ Request::is('dashboard/galeri*') ? 'bg-dark' : '' }} mb-2"
                        style="padding: 0.8rem;">
                        <i class="nav-icon fa-regular fa-file-image" style="margin-right: 1rem;"></i>
                        <p class="side-text">
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/abouts"
                        class="nav-link  {{ Request::is('dashboard/abouts*') ? 'bg-dark' : '' }} mb-2"
                        style="padding: 0.8rem;">
                        <i class="nav-icon fa-solid fa-bullseye" style="margin-right: 1rem;"></i>
                        <p class="side-text">
                            Others
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dashboard/contact"
                        class="nav-link  {{ Request::is('dashboard/contact*') ? 'bg-dark' : '' }} mb-2"
                        style="padding: 0.8rem;">
                        <i class="nav-icon fa-solid fa-inbox" style="margin-right: 1rem;"></i>
                        <p class="side-text">
                            Inbox
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/home" class="nav-link mb-2" style="padding: 0.8rem;">
                        <i class="nav-icon fas fa-door-closed" style="margin-right: 1rem;"></i>
                        <p class="side-text">Home Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="nav-link text-start text-dark" style="padding:0.8rem;" type="submit"
                            name="submit">
                            <i class="nav-icon fas fa-right-from-bracket" style="margin-right: 1rem;"></i>
                            <p class="side-text">
                                Logout
                            </p>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
