<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardAboutController;
use App\Http\Controllers\DashboardCarouselController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardPicturesController;
use App\Http\Controllers\DashboardPostContoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterContoller;
use App\Models\About;
use App\Models\Carousel;
use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Models\Pictures;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return redirect('/home');
});


//---------------------------------------------------------------
//  Deskripsi Route /tentang
// -------------------------------------------------------------
// Route yang mengarah ke halman TENTANG KAMI, 
// yang mengirimkan array sebagai berikut,
// dan untuk menampilkan data dari database ada di dalam array 'about'
// -
// -
Route::get('/tentang', function (About $about) {
    return view('tentang', [
        "style" => "style-tentang",
        "title" => "TENTANG KAMI",
        "title_url" => "Tentang kami",
        'about' => $about->all()
    ]);
});


//---------------------------------------------------------------
//  Deskripsi Route /Gallery
// -------------------------------------------------------------
// Route yang mengarah ke halman GALLERY KAMI, 
// dan mengirimkan array sebagai berikut,
// untuk mengambil data dari database picture ada di array 'picture'
// untuk mengambil data dari database carousel ada di array 'carousel'
// -
// -
Route::get('/galeri', function (Pictures $picture, Carousel $carousel) {
    return view('galeri', [
        "style" => "style-galeri",
        "title" => "GALERI",
        "title_url" => "Galeri",
        'picture' => $picture->latest()->get(),
        'carousel' => $carousel->latest()->get()
    ]);
});


// --= ROute yang mengarah ke halaman "KONTAK KAMI"
Route::get('/kontak', [ContactController::class, 'index']);
// --= ROute yang menyimpan data request form pada halaman "KONTAK KAMI"
Route::post('/kontak', [ContactController::class, 'store']);
// --= Route yang mengarah ke halaman dashboard -> inbox. CRUD 
Route::resource('/dashboard/contact', DashboardContactController::class)->except('create', 'store', 'edit', 'update')->middleware('auth');


// --== Rote yang mengarah ke halaman keseluruhan berita ketika di klick 'baca selengkapnya'
Route::get('/news/{news:slug}', [NewsController::class, 'news']);
// --== Route yang mengarah ke halaman berita 
Route::get('/berita', [NewsController::class, 'berita']);
// --== Route yang mengarah ke halmaan Home/index
Route::get('/home', [NewsController::class, 'home']);




// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Authentication ROute
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// --== ROute yang mengarah kehalamn Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// --== ROute yang menyimpan data request dari halaman /login kemudian di eksekusi, validasi, dll
Route::post('/login', [LoginController::class, 'store']);
// --= ROute yang berfungsi untuk Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
// --== Route yang mengarah kehalaman Register
Route::get('/register', [RegisterContoller::class, 'index'])->middleware('guest');
// --== Route untuk menyimpan data request dari halaman register kemudian di eksekusi, validasi, dll
Route::post('/register', [RegisterContoller::class, 'store']);



// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Dashboard ROute
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// --== ROute yang mengarah ke halamn utama Dashboard 
Route::get('/dashboard',  function (News $news, Pictures $picture, Carousel $carousel) {
    return view('dashboard.index', [
        'entirePost' => $news->where('user_id', auth()->user()->id)->count(),
        'entirePicture' => $picture->where('user_id', auth()->user()->id)->count(),
        'carousel' => $carousel->latest()->get()

    ]);
})->middleware('auth');
// --== Route yang mengarah ke halaman CRUD Berita 
Route::resource('/dashboard/posts', DashboardPostContoller::class)->middleware('auth');

// --== Route yang mengarah ke halaman CRUD Pictures
Route::resource('/dashboard/galeri/pictures', DashboardPicturesController::class)->except('show')->middleware('auth');

// --== Route yang mengarah ke halaman CRUD Carousel
Route::resource('/dashboard/galeri/carousel', DashboardCarouselController::class)->except('show')->middleware('auth');

// --== Route yang mengarah ke halaman CRUD About
Route::resource('/dashboard/abouts', DashboardAboutController::class)->except('show', 'create', 'store', 'destroy')->middleware('auth');
