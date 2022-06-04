<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/Service&Policy', function () {
    return view('Service&Policy');
});

Route::get('/Questionnaire', function () {
    return view('Questionnaire');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/connectWdoc', function () {
    return view('connectWdoc');
});

Route::get('/articles/article1', function () {
    return view('articles/article1');
});

Route::get('/articles/article2', function () {
    return view('articles/article2');
});

Route::get('/articles/article3', function () {
    return view('articles/article3');
});

Route::get('/articles/article4', function () {
    return view('articles/article4');
});

Route::get('/articles/article5', function () {
    return view('articles/article5');
});

Route::get('/articles/article6', function () {
    return view('articles/article6');
});

Route::get('/articles/article7', function () {
    return view('articles/article7');
});

Route::get('/articles/article8', function () {
    return view('articles/article8');
});

Route::get('/articles/article9', function () {
    return view('articles/article9');
});

Route::get('/articles/article10', function () {
    return view('articles/article10');
});

Route::get('/articles/article11', function () {
    return view('articles/article11');
});

Route::get('/articles/article12', function () {
    return view('articles/article12');
});


Route::get('/patients./index', function () {
    return view('patients/index');
});


Route::get('delete-records','PatientController@index');
Route::get('delete/{id}','PatientController@destroy');


Route::get('connectWdoc/{id}','PatientController@show');


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/auth/adminRegister', function () {
    return view('/auth/adminRegister');
});

//Route::resource('pati', [App\Http\Controllers\PatientController]);
//use App\Http\Controllers\PatientController;
//Route::resource('/pati', PatientController::class);
//Route::resource(‘/contact’, ContactController::class);


Route::resource('patients','PatientController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
