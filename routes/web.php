<?php

use App\Http\Middleware\LengthwordMid; 
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 

// Route to the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route to the home page
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/lengthword', function () {
    return view('lengthword');
})->name('lengthword');

Route::post('/submit-answer', function (Request $request) {
    $answer = $request->input('answer');
    
    $correctAnswer = 'Incorrectly';

    Log::info('User submitted an answer: ' . $answer);

    if (strtolower(trim($answer)) === strtolower($correctAnswer)) {
        // Log successful submission
        Log::info('User submitted the correct label: ' . $answer);

        $request->session()->put('lengthword', true);
        return redirect()->route('compilation'); 
    } else {

        Log::warning('User submitted an incorrect label: ' . $answer);

        return redirect()->back()->with('error', 'Incorrect! Try again.');
    }
})->name('submitAnswer');

Route::get('/compilation', function (Request $request) {

    if ($request->session()->has('lengthword')) {
        return view('compilation'); 
    } else {
        return redirect()->route('lengthword'); 
    }
})->name('compilation');

// Portfolio routes
Route::get('/lab1', function () {
    return view('lab1');
})->name('lab1');

Route::get('/lab2', function () {
    return view('lab2');
})->name('lab2');

Route::get('/lab3', function () {
    return view('lab3');
})->name('lab3');

Route::get('/lab4', function () {
    return view('lab4');
})->name('lab4');
