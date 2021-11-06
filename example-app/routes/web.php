<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RegController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/about', function() {
    return view('about');
});

Route::get('/lapp', function(){
    return view ('lapp');  
});

Route::get('/contact', function(){
    return view('contact');
});
*/



/*
Route::post('postform', function(Request $request){
    return $request ->all();
});

Route::get('/users/{id}', function($id){
    return '<h1>this is user '.$id;
});
*/

Route::get('/myname', [PagesController::class, 'myname']);
Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/welcome', [PagesController::class, 'welcome']);
Route::get('/lapp', [PagesController::class , 'lapp']);
   
/*Route::post('postform', function(Request $request){
    return $request -> all();
});
*/
Route::get('/contact', [FormController::class, 'getform'])->name('get.form');
Route::post('postform', [FormController::class, 'postform'])->name('post.form');
Route::get('/reg', [RegController::class, 'getreg']);
Route::post('postreg', [RegController::class, 'postreg']);
