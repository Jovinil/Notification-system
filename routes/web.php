<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserCredentialsController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/user/{id}', [TaskController::class, 'index'])->name('user-index');

// Route::get('/user/create-task', function(){
//     return view('crud.create-task');
// })->name('create.task');
Route::get('/populate', [TaskController::class, 'testCase']);

Route::get('/user/create-task/{id}', [TaskController::class, 'getUserId'])->name('create-task');
Route::post('/user/save-task/{id}', [TaskController::class, 'createTask'])->name('save-task');

Route::get('/user/view-task/{user_id}/{task_id}', [TaskController::class, 'getTask'])->name('get-task');
Route::get('/user/edit-task/{user_id}/{task_id}', [TaskController::class, 'editTask'])->name('edit-task');
Route::post('/user/update-task/{user_id}/{task_id}', [TaskController::class, 'updateTask'])->name('update-task');
Route::get('/user/delete-task/{user_id}/{task_id}', [TaskController::class, 'deleteTask'])->name('delete-task');

Route::get('/', function () {
    return view('index');
})->name('index');

// Route::get('/user', function () {
//     return view('pages.user');
// });

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/logout', [UserCredentialsController::class, 'logout'])->name('logout');

Route::post('/logging-in', [UserCredentialsController::class, 'login'])->name('user.login');

Route::get('/otp', function () {
    return view('send-otp');
})->name('send-otp');

Route::get('/forget-password', function () {
    return view('confirm-otp');
})->name('forgot-password');

Route::get('/create-account', function () {
    return view('create-account');
})->name('create-account');

Route::get('/test', function(){
    return view('edit-profile');
});
