<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. For
| all of these routes, you can use the RouteServiceProvider and a
| web middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Events Routes
Route::get('/events', function () {
    return view('events.index');
})->name('events.index');

Route::get('/events/{event}', function ($event) {
    return view('events.show', compact('event'));
})->name('events.show');

Route::get('/events/{event}/tickets', function ($event) {
    return view('events.tickets', compact('event'));
})->name('events.tickets');

Route::get('/events/{event}/stream', function ($event) {
    return view('events.stream', compact('event'));
})->name('events.stream');

Route::get('/tickets', function () {
    return view('tickets.index');
})->name('tickets.index');

Route::get('/tickets/purchase', function () {
    return view('tickets.purchase');
})->name('tickets.purchase');
