<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DataController;
use App\Models\Exam;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\Controllers;
use App\Rules\mobileno;

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

Route::get('/make' ,[App\Http\Controllers\DataController::class, 'javad']);

Route::get('/', function () {

    session(['UserName' => 'JavadMoosavi']);

    return view('welcome');
});

Route::get('teacher', [DataController::class, 'fetch_exam']);


Route::post('/teacher', function (){

   /* 

    $validator = Validator::make(request()->all(), [
       'title' => ['required', new mobileno],
        'type' => 'required'
    ],
        ['title.required' => 'ورود عنوان ضروری است']
    );

    if($validator->fails())
    {
        return redirect()->back()->withErrors($validator);
    }

    Exam::create([
        'title' => request('title'),
        'type' => request('type'),
        'qcount' => request('qcount'),
        'answers' => request('answers')
    ], );

    */

    return redirect('/teacher');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/loginfrm', [App\Http\Controllers\DataController::class, 'loggin']);