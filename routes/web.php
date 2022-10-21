<?php

// User Controllers
use App\Http\Controllers\User\HomeController as frontendHome;
use App\Http\Controllers\User\BlogController as frontendBlog;
use App\Http\Controllers\User\mainGalleryController as frontendGallery;
use App\Http\Controllers\User\tourController as frontendTourCategory;
use App\Http\Controllers\User\printController as frontendPrintCategory;
use App\Http\Controllers\User\mailController;

// Admin Controllers
use App\Http\Controllers\Admin\HomeController as backendHome;
use App\Http\Controllers\Admin\BlogController as backendBlog;
use App\Http\Controllers\Admin\galleryCategoryController as backendGalleryCategory;
use App\Http\Controllers\Admin\galleryController as backendGallery;
use App\Http\Controllers\Admin\tourCategoryController as backendTourCategory;
use App\Http\Controllers\Admin\tourGalleryController as backendTourGallery;
use App\Http\Controllers\Admin\printCategoryController as backendPrintCategory;
use App\Http\Controllers\Admin\printGalleryController as backendPrintGallery;
use App\Http\Controllers\Admin\blogGalleryController as backendBlogGallery;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;


//* Symlink Route
Route::get('storage/{filepath}/{filename}', function ($filepath,$filename)
{
    $path = storage_path('app/'.$filepath.'/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});


//! User Static Routes
Route::get('/',[frontendHome::class,'index'])->name('/');
Route::get('/about',[frontendHome::class,'about'])->name('about');
Route::get('/contact',[frontendHome::class,'contact'])->name('contact');
Route::get('/maintenance',[frontendHome::class,'maintenance'])->name('maintenance');
Route::get('/404',[frontendHome::class,'notFound'])->name('notFound');

//* blogs
Route::get('blogs',[frontendBlog::class,'index'])->name('blogs');
Route::get('blogs/blog/{slug}',[frontendBlog::class,'blog'])->name('blog');

//* Main Gallery
Route::get('gallery/{slug}',[frontendGallery::class,'index'])->name('gallery');

//* Tours
Route::get('tours/{slug}',[frontendTourCategory::class,'tour'])->name('tour');

//* Prints
Route::get('prints',[frontendPrintCategory::class,'index'])->name('prints');
Route::get('prints/print/{slug}',[frontendPrintCategory::class,'print'])->name('print');

//TODO Mail Service
Route::post('support',[mailController::class,'index'])->name('support');



// !Admin Routes
Route::get('admin/home',[backendHome::class,'index'])->middleware('auth')->name('admin.home');

//* Blog Routes
Route::resource('admin/blog',backendBlog::class)->middleware('auth');
Route::resource('admin/blogs/blog_gallery',backendBlogGallery::class)->middleware('auth');

//* Main Gallery Routes
Route::resource('admin/gallery/category',backendGalleryCategory::class)->middleware('auth');
Route::resource('admin/gallery/images',backendGallery::class)->middleware('auth');

//* Tour Routes
Route::resource('admin/tour/tour_category',backendTourCategory::class)->middleware('auth');
Route::resource('admin/tour/tour_gallery',backendTourGallery::class)->middleware('auth');

//* Print Routes
Route::resource('admin/print/print_category',backendPrintCategory::class)->middleware('auth');
Route::resource('admin/print/print_gallery',backendPrintGallery::class)->middleware('auth');


// !Maintenance Routes
//* Maintenance Active
Route::get('/site-maintenance-done', function() {
    Artisan::call('up');
    return redirect()->back();
})->middleware('auth');

//* Maintenance Deactive
Route::get('/site-maintenance', function() {
    Artisan::call('down --secret="9b67917abb7bb717c83f3093bc8b24638a67a20b"');
    return redirect()->back();
})->middleware('auth');
