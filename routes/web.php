<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;

Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');


Route::get('/management', [ManagementController::class, 'management']);
Route::post('/management', [ManagementController::class, 'management']);


Route::get('/management/search', [ManagementController::class, 'search'])->name('management.search');
Route::post('/management/search', [ManagementController::class, 'search'])->name('management.search');

Route::post('/management/delete', [ManagementController::class, 'delete'])->name('management.delete');


