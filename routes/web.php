<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\chiefController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\WebsiteController;

use Illuminate\Support\Facades\Route;




// Route::get('/dashboard', [AuthController::class, 'index'])->middleware('check_admin')->name('dashboard');
// Route::prefix('user')->name('user.')->group(function () {
//     Route::get('/register', [AuthController::class, 'register_form'])->name('register');
//     Route::post('/register', [AuthController::class, 'register']);
//     Route::get('/login', [AuthController::class, 'login_form'])->name('login');
//     Route::post('/login', [AuthController::class, 'login']);

//     Route::middleware('check_admin')->group(function () {
//         Route::get('/table', [AuthController::class, 'users_show'])->name('table');
//         Route::get('/delete/{id}', [AuthController::class, 'user_delete'])->name('delete');
//         Route::get('/edit/{id}', [AuthController::class, 'user_edit'])->name('edit');
//         Route::post('/update/{id}', [AuthController::class, 'user_update'])->name('update');
//         Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//     });
// });





Route::get('/dashboard',[AuthController::class,'index'])->middleware('check_admin')->name('dashboard');
Route::get('/register',[AuthController::class,'register_form'])->name('user.register');
Route::post('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'login_form'])->name('user.login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout',[AuthController::class,'logout'])->middleware('user')->name('user.logout');
Route::get('/users/table',[AuthController::class,'users_show'])->middleware('check_admin')->name('users.table');
Route::get('/users/delete/{id}',[AuthController::class,'user_delete'])->middleware('check_admin')->name('users.delete');
Route::get('/users/edit/{id}',[AuthController::class,'user_edit'])->middleware('check_admin')->name('users.edit');
Route::post('/users/update/{id}',[AuthController::class,'user_update'])->middleware('check_admin')->name('users.update');


// Route::get('/category/add',[CategoryController::class,'index'])->name('category.add');
// Route::post('/category/add',[CategoryController::class,'store']);
// Route::get('/category/show',[CategoryController::class,'show'])->name('category.show');
// Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
// Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
// Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');
// // Group for CategoryController routes
Route::prefix('category')->name('category.')->middleware('check_admin')->group(function () {
    Route::get('/add', [CategoryController::class, 'index'])->name('add');
    Route::post('/add', [CategoryController::class, 'store']);
    Route::get('/show', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
});

//
Route::prefix('menu')->controller(MenuController::class)->middleware('check_admin')->name('menu.')->group(function () {
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/delete/{id}','destroy')->name('delete');
    Route::get('/permdeleted/{id}','permdeleted')->name('permdeleted');
    Route::get('/restore/{id}','restore')->name('restore');
    Route::get('/trashshow','trashshow')->name('trashshow');


});

Route::prefix('chief')->controller(chiefController::class)->middleware('check_admin')->name('chief.')->group(function ()
{
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/delete/{id}','destroy')->name('delete');
});


Route::get('/', [WebsiteController::class,'index'])->name('website.home');
Route::get('/lazizi/menu' , [WebsiteController::class,'menu'])->name('website.menu');
Route::get('/lazizi/menu/cat/{id}' , [WebsiteController::class,'singlecategory'])->name('website.singlecategory');
Route::get('/myreservation/{id}',[WebsiteController::class,'myreservation'])->middleware('user')->name('myreservation');
Route::get('/aboutus',[WebsiteController::class,'aboutus'])->name('aboutus');
Route::get('/blogdetail/{id}',[WebsiteController::class,'blogdetails'])->name('blog.detail');
Route::get('/blogweb',[WebsiteController::class,'blog'])->name('blog.web');
Route::get('/temp',[WebsiteController::class,'blog'])->name('blog.web');

Route::prefix('reservation')->controller(ReservationController::class)->name('reservation.')->group(function ()
{
    Route::get('/add','store')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/update/{id}','update')->name('update');
    Route::get('/cancel/{id}','canceled')->name('cancel');
    Route::get('/delete/{id}','destroy')->name('delete');
});

Route::prefix('blog')->controller(BlogController::class)->middleware('check_admin')->name('blog.')->group(function ()
{
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/delete/{id}','destroy')->name('delete');
});

Route::get('contact/add',[ContactController::class,'index'])->name('contact.add');
Route::post('contact/add',[ContactController::class,'store']);
Route::prefix('contact')->controller(ContactController::class)->middleware('check_admin')->name('contact.')->group(function ()
{
    Route::get('/show','show')->name('show');
    Route::get('/update/{id}','update')->name('update');
    Route::get('/cancel/{id}','canceled')->name('cancel');
    Route::get('/delete/{id}','destroy')->name('delete');
});
