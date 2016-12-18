<?php

use App\Contact;
use Illuminate\Http\Request;
Route::resource('contact','ContactController');


//
// Route::get('/', function () {
//   $contacts = Contact::orderBy('created_at', 'asc')->get();
//
//   return view('contacts', [
//     'contacts' => $contacts
//   ]);
// });
//
// Route::post('/contact', function (Request $request) {
//   $validator = Validator::make($request->all(), [
//     'name' => 'required|max:255',
//   ]);
//
//   if ($validator->fails()) {
//     return redirect('/')
//       ->withInput()
//       ->withErrors($validator);
//   }
//
//   $contact = new Contact;
//   $contact->name = $request->name;
//   $contact->save();
//
//   return redirect('/');
// });
//
// Route::delete('/contact/{contact}', function (Contact $contact) {
//   $contact->delete();
//
//   return redirect('/');
// });
