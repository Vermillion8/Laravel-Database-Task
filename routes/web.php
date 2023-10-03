<?php

use App\Models\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/form', [FormController::class, 'index']);

Route::post('/form', [FormController::class, 'processForm']);

// Route::post('/form', function(){
//   $form = new Form();
//   $form->email = request('floating_email');
//   $form->password = request('floating_password');
//   $form->first_name = request('floating_first_name');
//   $form->last_name = request('floating_last_name');
//   $form->age = request('floating_age');
//   $form->save();
//   return redirect('/submission');
// });

Route::get('/submission', function(){
  $forms = Form::all();
  return view('submission', ['forms' => $forms]);
});


