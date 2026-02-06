<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Event\EventController;
use App\Http\Controllers\Web\Auth\RegisterController;
use App\Http\Controllers\Web\Admin\AdminIndexController;

// Главная страница
Route::get('/', [EventController::class, 'index'])->name('index');
// Вход в систему
Route::controller(LoginController::class)
    ->prefix('/login')
    ->name('login.')
    ->group(function () {
        Route::get('/', 'create')->name('create'); // Страница входа в систему
        Route::post('/store', 'store')->name('store'); // Маршрут для входа в систему
    });

// Регистрация в системе
Route::controller(RegisterController::class)
    ->prefix('/register')
    ->name('register.')
    ->group(function () {
        Route::get('/', 'create')->name('create'); // Страница регистрации в системе
        Route::post('/store', 'store')->name('store'); // Маршрут для регистрации в системе
    });

// Маршруты для участников, руководителей и т.д.
Route::middleware([AuthMiddleware::class])
    ->group(function () {

        // Олимпиады
        Route::controller(EventController::class)
            ->prefix('/events')->name('event.')
            ->group(function () {
            Route::get('/{event}')->name('show'); // Страница просмотра конкретной олимпиады
        });
    });

// Маршруты для администраторов
Route::middleware([AuthMiddleware::class])
    ->prefix('/admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', AdminIndexController::class)->name('index'); // Главная страница админ-панели
    });

// Резервнывй маршрут
// Route::fallback(function (Exception $e) {
//     dd($e->getMessage());
//     return redirect()->route('index');
// });
