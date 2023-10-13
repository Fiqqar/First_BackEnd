<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswacontroller;
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
Route::post('siswa/dashboard', function () {
    return 'This is Dashboard';
});
Route::put('siswa/add', function () {
    return '';
});
Route::delete('siswa/delete', function () {
    return '';
});
Route::post('user/dashboard', function () {
    return 'This is Dashboard';
});
Route::put('user/add', function () {
    return '';
});
Route::delete('user/delete', function () {
    return '';
});
Route::resource('siswas', siswacontroller::class);