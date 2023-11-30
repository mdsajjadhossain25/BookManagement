<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\BookModel;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/demo/{name}/{id?}', function($name, $id=null){
//     // return view('demo');
//     // echo $name . " ";
//     // echo $id;
//     $data = compact('name', 'id');
//     return view('demo')->with($data);
// });
// // Route::any('/test', function(){
// //     echo "This is post test";
// // });

// Route::get('/{name?}',function($name=null){
//     $html_tag = "<h2>this is html</h2>";
//     $data = compact('name', 'html_tag');
//     return view('home')->with($data);
// });

// Route::get('/', function(){
//     return view('home');
// });

// Route::get('/',[DemoController::class, 'index']);
// Route::get('/about', [DemoController::class, 'about']);
// Route::get('/courses',SingleActionController::class);
// Route::resource('/photo', PhotoController::class);

// Route::get('/register', [RegistrationController::class,'index']);
// Route::post('/register',[RegistrationController::class, 'register']);


Route::get('books/create', [BooksController::class, 'create'])->name('create');
Route::post('books/', [BooksController::class, 'store'])->name('storeBook');
Route::get('/', [BooksController::class, 'index'])->name('home');
Route::get('books/singlebook/{bookId}/show', [BooksController::class, 'singlebook'])->name('show');
Route::get('books/delete/{id}', [BooksController::class, 'delete'])->name('deleteItem');
Route::get('books/edit/{id}', [BooksController::class, 'editItem'])->name('editItem');
Route::post('books/edit/{id}', [BooksController::class, 'update'])->name('update');