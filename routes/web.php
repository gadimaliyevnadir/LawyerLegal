<?php

use App\Http\Controllers\admin\AboutUsController;
use App\Http\Controllers\admin\AddressController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BlockQuoteController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BrendController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\DefinitionController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\IframeController;
use App\Http\Controllers\admin\JacsonController;
use App\Http\Controllers\admin\LeftAlignedController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\NewsController;
use App\Http\Controllers\admin\PracticeController as AdminPracticeController;
use App\Http\Controllers\admin\RightAlignedController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\TextSampleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;


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
Route::group(['prefix'=>FacadesLaravelLocalization::setlocale(), 'as'=>'front.'],function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/newsDetails/{id}', [HomeController::class, 'newsDetails'])->name('newsDetail');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/practiceArea',[HomeController::class,"practiceArea"])->name('practiceArea');
    Route::get('/contact',[HomeController::class,'contact'])->name("contact");
    Route::post('/contactForm', [HomeController::class, 'contactForm'])->name("contactForm");
    Route::post('/quoteForm', [HomeController::class, 'quoteForm'])->name("quoteForm");
    Route::get('/blog',[HomeController::class,'blog'])->name('blog');
    Route::get('/blogDetails',[HomeController::class,'blogDetails'])->name('blogDetails');
    Route::get('/blogElements',[HomeController::class,'elements'])->name('elements');
    Route::get('/blogs/{id}',[HomeController::class,'blogs'])->name('blogs');
    Route::get('/blogtags/{slug}',[HomeController::class,'blogses'])->name('blogtags');
});


Route::get('/control/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/control/login-submit', [LoginController::class, 'loginSubmit'])->name('admin.login.submit');

Route::group(['prefix' => 'control', 'as' => 'admin.','middleware'=>'adminCheck'], function () {

    Route::get('logout',[LoginController::class,'logout'])->name('logout');

    Route::get('/', [AdminHomeController::class,'index'])->name('home');
    Route::resource('sliders',SliderController::class);
    Route::resource('banners',BannerController::class);
    Route::resource('practices',AdminPracticeController::class);
    Route::resource('iframes',IframeController::class);
    Route::resource('address',AddressController::class);
    Route::resource('brends',BrendController::class);
    Route::resource('abouts',AboutUsController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('news', NewsController::class);
    Route::resource('jacsons', JacsonController::class);
    Route::resource('textsamples',TextSampleController::class);
    Route::resource('leftaligned',LeftAlignedController::class);
    Route::resource('rightaligned',RightAlignedController::class);
    Route::resource('definitions',DefinitionController::class);
    Route::resource('blockquotes',BlockQuoteController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('blogs',BlogController::class);
    Route::resource('tags',TagController::class);
});
