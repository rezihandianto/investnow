<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\KomdaController;
use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::group(['middleware' => ['role:superadmin']], function () {
Route::get('/admin/index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::resource('members', MemberController::class);
// });

// Route::group(['middleware' => ['role_or_permission:member|publish-member']], function () {
Route::get('/member/index', [App\Http\Controllers\MemberController::class, 'index'])->name('member.index');
// Route::get('/member/{members}', [App\Http\Controllers\MemberController::class, 'show']);
// });
Route::resource('komdas', KomdaController::class);
Route::get('/komda/dashboard', [App\Http\Controllers\DashboardKomdaController::class, 'index'])->name('komda.dashboard');

Route::resource('adminusers', AdminUserController::class);
Route::get('/adminuser/dashboard', [App\Http\Controllers\DashboardAdminUserController::class, 'index'])->name('adminuser.dashboard');
