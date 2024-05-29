<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Permission;

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

Auth::routes();

Route::middleware('auth')->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/permission', [App\Http\Controllers\PermissionController::class,'index'])->name('permission');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,

    'mahasiswa' => MahasiswaController::class,
    'permissions' => PermissionController::class,
]);
});



Route::get('/products', [ProductController::class, 'viewIndex'])->name('kelola');


Route::get('/tambah-produk', function () {
    return view('products.create');
});


Route::post('/kelola-produk/create', [ProductController::class, 'create'])->name('tambah');

Route::delete('/kelola-produk/delete/{id}', [ProductController::class, 'delete'])->name('hapus');

Route::get('/edit-produk/{id}', [ProductController::class, 'viewEdit'])->name('edit');

Route::post('/edit-produk/{id}/store', [ProductController::class, 'edit'])->name('store.edit');

Route::get('/products/create', [ProductController::class, 'viewCreate'])->name('products.create.form');
Route::post('/products/create', [ProductController::class, 'create'])->name('products.create');
