<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusinessLikeDislikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentLikeDislikeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/admin', function () {
//     return view('master/user_admin');
// })->middleware('userAuth');


// Route::get('/business', function () {
//     return view('master/business');
// });


Route::get('/admin', [BusinessController::class, 'getuserAllBusiness'])->middleware('userAuth');

Route::post('/business', [BusinessController::class, 'userAllBusiness'])->name('post.userBusiness')->middleware('userAuth');

Route::get('/businessdetail', [BusinessController::class, 'oneBusiness'])->middleware('userAuth');

Route::post('/businessedit', [BusinessController::class, 'editBusiness'])->name('post.editBusiness')->middleware('userAuth');

Route::post('/edit', [BusinessController::class, 'edit'])->name('post.edit')->middleware('userAuth');

Route::post('/destroy', [BusinessController::class, 'destroy'])->name('post.destroy')->middleware('userAuth');

Route::post('/deactive', [BusinessController::class, 'deactive'])->name('post.deactive')->middleware('userAuth');

Route::post('/search', [BusinessController::class, 'searchBusiness'])->name('post.search');

Route::get('/home', [BusinessController::class, 'getAllBusiness']);

Route::post('/addbusiness', [BusinessController::class, 'registerBusiness'])->name('post.business')->middleware('userAuth');

Route::post('/like', [BusinessLikeDislikeController::class, 'businessLike'])->name('post.like');

Route::post('/destroylike', [BusinessLikeDislikeController::class, 'destroyBusinessLike'])->name('post.destroylike');



Route::post('/commentAll', [CommentController::class, 'businessCommentAll'])->name('post.commentAll');

Route::post('/comment', [CommentController::class, 'businessComment'])->name('post.comment');

/////////////////////

Route::post('/commentLike', [CommentLikeDislikeController::class, 'businessCommentLike'])->name('post.commentLike');

Route::post('/destroyCommentLike', [CommentLikeDislikeController::class, 'distroyBusinessCommentLike'])->name('post.destroyCommentLike');




////////////////////

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



require_once __DIR__ . '/fortify.php';
