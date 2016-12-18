<?php

use App\Contact;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    retunr view('contacts');
});

/**
 * Add New Task
 */
Route::post('/contact', function (Request $request) {
    //
});

/**
 * Delete Task
 */
Route::delete('/contact/{contact}', function (Contact $task) {
    //
});
