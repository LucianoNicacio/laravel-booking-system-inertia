<?php

use App\Bookings\ScheduleAvailability;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canRegister' => Features::enabled(Features::registration()),
//    ]);

    $availability = (new ScheduleAvailability())->forPeriod(
        now()->startOfDay(),
        now()->addMonth()->endOfDay(),
    );
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
