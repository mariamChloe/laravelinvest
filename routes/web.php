<?php

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
    return view('accueil');
});


Route::get('/inscription-startups', function () {
    return view('inscription-startups');
});
Route::post('/startups', [FormController::class, 'store']);



Route::get('/inscription-investisseurs', function () {
    $success = null;
    return view('inscription-investisseurs', compact('success') );
});
Route::post('/investisseurs', [FormController::class, 'store']);

Route::post('invest', 'FormController@store');



