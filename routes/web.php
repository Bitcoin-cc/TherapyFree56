<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\Patient;


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





Route::any( '/search', function () {
    $q = Request::get ( 'q' );
    $patient = Patient::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'Description', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $patient ) > 0)
        return view ( '/search' )->withDetails ( $patient )->withQuery ( $q );
    else
        return view ( '/search' )->withMessage ( 'No Details found. Try to search again !' );
} );





Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/payment', function () {
    return view('payment');
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


Route::get('/patients/index', function () {
    return view('patients/index');
});



// Route::get('/request/index', function () {
//     return view('/request/index');
// });

Route::get('delete-records','PatientController@index');
Route::get('delete/{id}','PatientController@destroy');



Route::get('request','PatientUController@index');
Route::get('request','PatientUController@index');
 

Route::get('/payment1', function () {
    return view('/payment1');
});
Route::get('/payment2', function () {
    return view('/payment2');
});
Route::get('/payment3', function () {
    return view('/payment3');
});
Route::get('/payment4', function () {
    return view('/payment4');
});

Route::post('pay', [App\Http\Controllers\PaymentController::class, 'pay'])->name('payment');


Route::get('success', [App\Http\Controllers\PaymentController::class, 'success']);
Route::get('error', [App\Http\Controllers\PaymentController::class, 'error']);


Route::get('/faq', function () {
    return view('faq');
});

Route::get('/auth/adminRegister', function () {
    return view('/auth/adminRegister');
});

//Route::resource('pati', [App\Http\Controllers\PatientController]);
//use App\Http\Controllers\PatientController;

// Route::get('/userAuth/index', function () {
//     return view('/userAuth/index');
// });

// Route::resource('userAuth','PatientController');

 Route::resource('patients','PatientController');

// Route::resource('patients','PatientUController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
