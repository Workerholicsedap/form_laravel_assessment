<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/member/create', [MemberController::class, 'create'])->name('member.create');
Route::post('/member/store', [MemberController::class, 'store'])->name('member.store');
Route::get('/member/table', [MemberController::class, 'table'])->name('member.table');
Route::delete('/member/delete/{id}', [MemberController::class, 'delete'])->name('member.delete');
Route::get('/admin/login', function () {
    return view('admin_login');
})->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    $credentials = $request->validate([
        'name' => ['required', 'string'],
        'password' => ['required', 'string'],
    ]);

    // Try to login using 'name' as username
    if (Auth::attempt(['name' => $credentials['name'], 'password' => $credentials['password']])) {
        $request->session()->regenerate();
        return redirect()->intended(route('member.table'));
    }

    return back()->withErrors([
        'username' => 'The provided credentials do not match our records.',
    ])->withInput();
});

Route::get('/admin/dashboard', function () {
    return 'Welcome, Admin!'; // Replace with your admin dashboard view
})->middleware('auth');

Route::delete('/player/{id}', [PlayerController::class, 'destroy'])->name('player.delete');
Route::post('/player/store', [PlayerController::class, 'store'])->name('player.store');
Route::get('/player/table', [PlayerController::class, 'table'])->name('player.table');

Route::get('/server', function () {
    return view('server');
});

Route::get('/story', function () {
    return view('story');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/build', function () {
    return view('build');
});
