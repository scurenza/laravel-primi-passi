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
    $homeTitle = "Benvenuto da Boolean";
    return view('home', compact("homeTitle"));
})->name("home");

Route::get('/team', function () {
    $data = [
        "teamTitle" => "Il team di Boolean",
        "description" => "Tutor Boolean",
        "tutors" => [
            "Marco",
            "Mauro"
        ]
    ];
    return view('team', $data);
})->name("team");

Route::get('/teacher', function () {
    $teacherTitle = "Ecco la nostra teacher:";
    $teacher = "Olga";
    return view('teacher', compact("teacherTitle", "teacher"));
})->name("teacher");

Route::get('/supervisor', function () {
    $supervisor = "Adriano";
    return view('supervisor', compact("supervisor"));
})->name("supervisor");
