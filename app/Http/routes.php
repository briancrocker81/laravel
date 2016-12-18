<?php

use App\Contact;
use Illuminate\Http\Request;

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    return view('contacts');
});

/**
 * Add New Task
 */
Route::post('/contact', function (Request $request) {
  $validator = Validator::make($request->all(), [
          'name' => 'required|max:255',
      ]);

      if ($validator->fails()) {
          return redirect('/')
              ->withInput()
              ->withErrors($validator);
      }

      // Create Contact...
});

/**
 * Delete Task
 */
Route::delete('/contact/{contact}', function (Contact $task) {
    //
});
