<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cem\StudentsController;
use App\Http\Livewire\Cem\Classes\index as ClassesIndex;
use App\Http\Livewire\Cem\Students\Index as StudentsIndex;

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
    return view('welcome');
})->name('home');

Route::middleware('auth')->get('/classes', ClassesIndex::class)->name('classes');
Route::middleware('auth')->get('/students', StudentsIndex::class)->name('students');
Route::middleware('auth')->post('/students/import', [StudentsController::class, 'importStudent'])->name('students.import');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
