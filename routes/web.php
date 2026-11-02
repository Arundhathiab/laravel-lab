<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
Route::get('/', function () {
    return view('home');
});

// Activity A: MVC and Routes
Route::get('/hello/{name}', [PageController::class, 'hello']);
Route::get('/about', [PageController::class, 'about']);

// Activity B: Resource Controller
Route::resource('students', StudentController::class);
Route::get('/roll/{your_roll}', function (Student $your_roll) {
    return view('students.show', ['student' => $your_roll]);
});
Route::get('/api/students', function () {
    return response()->json(
        \App\Models\Student::all()
    );
});