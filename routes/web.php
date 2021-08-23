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


Route::get('/admin', function () {
    return view('admin.admin_layout.main');
});

Route::get('/create-role', function () {


    $user = \App\Models\User::find('2');
//    $role = \Spatie\Permission\Models\Role::create(['name' => 'subscriber']);
//    $permission = \Spatie\Permission\Models\Permission::create(['name' => 'category']);
//    $role->givePermissionTo($permission);


    //$user->assignRole('subscriber');

    if ($user->hasRole('subscriber')) {
        // do something
        return 'has role';
    } else {
        return 'not his role';
    }

    return 'success';
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
