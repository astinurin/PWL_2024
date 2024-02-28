<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
    return 'Hello World';
   });

Route::get('/world', function () {
    return 'World';
});
   
Route::get('/txt', function () {
    return 'Soobin ';
});
   
Route::get('/welcome', function () {
    return 'Selamat datang ';
});

Route::get('/about', function () {
    return ' Nama   : Asti Nurin Hidayanti <br>  NIM    : 2241720236';
});

//Route Parameters :
Route::get('/user/{Asti}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/user/{Soobin}', function ($name) {
    return 'Nama saya '.$name;
    });

    Route::get('/posts/{postId}/comments/{commentId}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
    
    
// Optional Parameters
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
}); //nanti bisa ubah atau beri nama di alamat atau url

Route::get('txt/{cb?}', function ($cb=null){
    return 'TXT COMEBACK IN '.$cb;
});

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// }); //ohh variabel namanya juga bisa langsung ditulis di sini
Route::get('/user/{name?}', function ($name='Danielle') {
    return 'Nama saya '.$name;
}); 


//ROUTE NAME 
Route::get('/user/profile', function() {
    //
    })->name('profile');



//CONTROLLER
use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class,'hello']);


use App\Http\Controllers\PageController;
Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'home']);

use App\Http\Controllers\AboutController;
Route::get('/about', [AboutController::class, 'about']);

use App\Http\Controllers\ArticleController;
Route::get('/article/{id}', [ArticleController::class, 'article'] );


//RESOURCE CONTROLLER 
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//     ])//mereka berdua atas bawah dipake 1 aja gaksih

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
    ]);