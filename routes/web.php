<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


Route::get('/image', function () {
    // Create the size of image or blank image
    $name = '39721629823923_avatar.png';
    $image = imagecreate(200, 200);
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);
    $fontPath = public_path('fonts/Oliciy.ttf');
    imagecolorallocate($image, $red, $green, $blue);
    $firstname = 'tanya';
    $char = strtoupper($firstname[0]);
    $textcolor = imagecolorallocate($image, 255, 255, 255);
    imagettftext($image, 100, 0, 50, 150, $textcolor, $fontPath, $char);
    header("Content-Type: image/png");
    $path = public_path("user/images/"). $name;
//    $dest = Storage::disk('local')->put($path, 'Contents');

    imagepng($image, $path);
    imagedestroy($image);

    return 'success';
});


Auth::routes();


Route::group(['middleware' => ['role:Super Admin']], function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
