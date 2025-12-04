<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\Auto;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/layout', function () {
    return view('layout-page');
})->name('layout.page');


Route::get('/user/add', function () {
    User::create([
        'name' => 'Nieuwe User',
        'email' => 'user'.rand(1,9999).'@example.com',
        'password' => bcrypt('password')
    ]);

    return 'Nieuwe user toegevoegd!';
});

Route::get('/users', function () {
    $users = User::all();

    foreach ($users as $user) {
        echo $user->id . ' - ' . $user->name . ' - ' . $user->email . '<br>';
    }
});


Route::get('/auto/add', function () {
    Auto::create([
        'merk' => 'Nieuwe Auto',
        'model' => 'Nieuwe Model',
        'jaar' => 2022,
        'kilometerstand' => 10000,
        'prijs' => 19999.50
    ]);

    return 'Nieuwe auto toegevoegd!';
});

Route::get('/autos', function () {
    $autos = Auto::all();

    foreach ($autos as $auto) {
        echo $auto->id . ' - ' . $auto->merk . ' - ' . $auto->model . ' - ' . $auto->jaar . ' - ' . $auto->kilometerstand . ' - ' . $auto->prijs . '<br>';
    }
});

Route::resource('/posts', PostController::class);

