<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carbon', function () {
    $now = Carbon::now();

    print $now;
});

Route::get('/carbon/14', function () {
    $future = Carbon::now()->addMonths(14);

    $year = $future->year;
    $month = $future->month;
    $day = $future->day;

    print $future . "<br>";
    print $year . "<br>";
    print $month . "<br>";
    print $day . "<br>";
});
