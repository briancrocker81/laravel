<?php

use App\Contact;
use Illuminate\Http\Request;
Route::resource('contact','ContactController');

Route::get('/', 'ContactController@index');
