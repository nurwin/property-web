<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

use App\Models\Agent;

Route::get('/', [HomeController::class, 'home'])->name('page.home');
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('page.property.show');
Route::get('/service', [HomeController::class, 'service'])->name('page.service');

Route::resource('agents', AgentController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/pembukaan', function () {
    return "Hello world";
})->name('greeting');

Route::view('/welcome', 'welcome2');

Route::get('/admin/{name}', function ($name) {
    return "ini halaman admin page ".$name;
});

Route::get('/base', function () {
    return view('layout.base', ['name' => 'John Doe']);
});

Route::get('/page/home', function () {
    return view('page.home');
});

Route::get('/page/about', function () {
    return view('page.about', ['name' => 'John']);
});

Route::get('/agent', function () {
    return Agent::all();
});