<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\BrokerageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ClientListController;
use App\Http\Controllers\CommissionTriggerController;

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

Route::get('/form/{step?}', [FormController::class, 'showForm'])
    ->name('form');

Route::post('/form/{step?}', [FormController::class, 'processForm'])
    ->name('form.process');

Route::middleware(['auth', 'userType'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Agents routes
    Route::resource('agents', AgentController::class);

    //Brokerages routes
    Route::resource('brokerages', BrokerageController::class);

    //Client List routes
    Route::resource('client-lists', ClientListController::class);

    //Commission Triggers List routes
    Route::resource('commission-triggers', CommissionTriggerController::class);

    // profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
