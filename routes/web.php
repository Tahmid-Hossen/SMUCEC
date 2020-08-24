<?php

use Illuminate\Support\Facades\Route;

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
  return view('index');
});

Route::get('home',function(){
  echo "this is home page";
});

Route::get('/contact', function(){
  return view('contact.pages');
})->middleware('Age');


Route::get('admin/page', 'AdminController@admin')->name('admin.page');
Route::get('add/student', 'StudentController@AddStudent')->name('add.student');
Route::post('store/student', 'StudentController@store')->name('store.student');
Route::get('all/student', 'StudentController@AllStudent')->name('all.student');
Route::get('view/student/{id}', 'StudentController@ViewStudent');
Route::get('delete/student/{id}', 'StudentController@DeleteStudent');
Route::get('edit/student/{id}', 'StudentController@EditStudent');
Route::post('update/student/{id}', 'StudentController@UpdateStudent');
