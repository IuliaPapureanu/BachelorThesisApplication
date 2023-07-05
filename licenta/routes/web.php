<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Backend\StudentController as BackendStudentController;
use App\Http\Controllers\CompanyController as CompanyController;
use App\Http\Controllers\TagController as TagController;
use App\Http\Controllers\MessageController as MessageController;
use App\Http\Controllers\BalanceSheetController as BalanceSheetController;
use App\Http\Controllers\UserController as UserController;
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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//Companies

Route::get('/companies',  [CompanyController::class, 'index'])
    ->name('companies.index')->middleware(['auth']);

Route::get('/companies/{company}',  [CompanyController::class, 'show'])
    ->name('companies.show')->middleware(['auth']);

Route::get('/companies/create/new',  [CompanyController::class, 'create'])
    ->name('companies.create')->middleware(['auth']);

Route::post('/companies', [CompanyController::class, 'store'])
    ->name('companies.store')->middleware(['auth']);

Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])
    ->name('companies.edit')->middleware(['auth']);

Route::patch('/companies/{company}', [CompanyController::class, 'update'])
    ->name('companies.update')->middleware(['auth']);

Route::delete('/companies/destroy/{company}', [CompanyController::class, 'destroy'])
    ->name('companies.destroy')->middleware(['auth']);

Route::post('/companies/assign/{company}', [CompanyController::class, 'assignTag'])
    ->name('companies.assignTag')->middleware(['auth']);

Route::delete('/companies/unassign/{company}/{tag}', [CompanyController::class, 'unassignTag'])
    ->name('companies.unassignTag')->middleware(['auth']);

Route::post('/companies/reports/{company}', [CompanyController::class, 'sendEmailReport'])
    ->name('companies.sendReport')->middleware(['auth']);

//Tags

Route::get('/tags',  [TagController::class, 'index'])
    ->name('tags.index')->middleware(['auth']);

Route::delete('/tags/destroy/{tag}', [TagController::class, 'destroy'])
    ->name('tags.destroy')->middleware(['auth']);

Route::get('/tags/create',  [TagController::class, 'create'])
    ->name('tags.create')->middleware(['auth']);

Route::post('/tags', [TagController::class, 'store'])
    ->name('tags.store')->middleware(['auth']);

Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])
    ->name('tags.edit')->middleware(['auth']);

Route::patch('/tags/{tag}', [TagController::class, 'update'])
    ->name('tags.update')->middleware(['auth']);

//Messages

Route::get('/messages/create',  [MessageController::class, 'create'])
    ->name('messages.create')->middleware(['auth']);

Route::post('/messages', [MessageController::class, 'store'])
    ->name('messages.store')->middleware(['auth']);

//Balance Sheets
Route::get('/balanceSheets/{company}',  [BalanceSheetController::class, 'index'])
    ->name('balanceSheets.index')->middleware(['auth']);

Route::get('/balanceSheets/{company}/create',  [BalanceSheetController::class, 'create'])
    ->name('balanceSheets.create')->middleware(['auth']);

Route::post('/balanceSheets/{company}', [BalanceSheetController::class, 'store'])
    ->name('balanceSheets.store')->middleware(['auth']);

//Users
Route::get('/users',  [UserController::class, 'index'])
    ->name('users.index')->middleware(['auth']);

Route::delete('/users/destroy/{user}', [UserController::class, 'denyUser'])
    ->name('users.destroy')->middleware(['auth']);

Route::patch('/users/{user}', [UserController::class, 'approveUser'])
    ->name('users.approve')->middleware(['auth']);
