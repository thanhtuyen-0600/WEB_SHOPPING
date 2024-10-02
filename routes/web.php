<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CountryController ;
use App\Http\Controllers\Admin\BlogController ;
use App\Http\Controllers\Frontend\MemberController;



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
    return view('welcome');
});
// nhóm các route lại 
Route::prefix('admin')->group(function(){

    Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
   
    Route::get('/profile',[UserController::class, 'profile'])->name('admin.profile');
    
    Route::post('/profile',[UserController::class, 'update']);

    // Country

    Route::get('/country/list',[CountryController::class, 'index']);

 
    Route::get('/country/add',[CountryController::class, 'creater']);


    Route::post('/country/add',[CountryController::class, 'insert']);


    Route::get('/country/del/{id}',[CountryController::class, 'delete'])->name('country.delete');


    Route::get('/country/edit/{id}',[CountryController::class, 'edit']);

    Route::post('/country/edit/{id}',[CountryController::class, 'update']);

    // Blog

    Route::get('/blog/list', [BlogController::class, 'index'])->name('blog.list');  //hiển thị danh sách blog (GET)

    Route::post('/blog/add', [BlogController::class, 'store'])->name('blog.store');  // xử lý form tạo blog (POST)
 
    Route::get('/blog/add',[BlogController::class, 'creater']);

    Route::get('/blog/del/{id}',[BlogController::class, 'delete'])->name('blog.delete');


    Route::get('/blog/edit/{id}',[BlogController::class, 'edit']);

    Route::post('/blog/edit/{id}',[BlogController::class, 'update']);




    

});

Route::prefix('frontend')->group(function(){

    Route::get('/register',[MemberController::class, 'showRegisterForm'])->name('member.register');

    Route::post('/register',[MemberController::class, 'register']);

    Route::get('/login',[MemberController::class, 'showLoginForm'])->name('member.login');
    
    Route::post('/login',[MemberController::class, 'login']);

    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

   
    





});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
