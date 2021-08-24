<?php

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
    return view('layouts.main');
});

Route::get('/create-role', function () {
//    $user = \App\Models\User::find('1');
//    $role = \Spatie\Permission\Models\Role::create(['name' => 'subscriber']);
//    $permission = \Spatie\Permission\Models\Permission::create(['name' => 'category']);
//    $role->givePermissionTo($permission);
//    $user->assignRole('Super Admin');
//
//    if ($user->hasRole('Super Admin')) {
//        // do something
//        return 'has role';
//    } else {
//        return 'not his role';
//    }

    phpinfo();
    return 'success';
});


Auth::routes();


Route::group(['middleware' => ['role:Super Admin']], function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
