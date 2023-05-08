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

// Route::get('/', function () {
//     //return view('welcome');
//     return view('home');
// });

Route::get('/ok', function () {
    return view('accueil');
});

Route::get('/kal/{n}', function ($n) {
    //return 'Je m appelle page '.$n.' ....';
    return view('accueil')
    ->with('num',$n);
})->where('n','[1-3]');

Route::get('/go/{n}',  [App\Http\Controllers\ShadController::class, 'go'])->where('n','[1-6]');

Route::get('/formulaire',[App\Http\Controllers\ShadController::class, 'formulaire']);
Route::post('/formulaire',[App\Http\Controllers\ShadController::class, 'affichage']);

Route::get('/aller/{n}/{i}',  [App\Http\Controllers\ShadController::class, 'aller'])->where('i','[3-6]');

Route::get('/kalpdf',[App\Http\Controllers\ShadController::class, 'generatePDF']);

Route::get('/script',[App\Http\Controllers\ShadController::class, 'script']);

Route::get('/testws',[App\Http\Controllers\ShadController::class, 'testws']);

//eto ary

Route::get('/',[App\Http\Controllers\ShadController::class, 'home']);
Route::get('/backoffice',[App\Http\Controllers\ShadController::class, 'back']);
Route::get('/frontoffice',[App\Http\Controllers\ShadController::class, 'front']);
Route::get('/office',[App\Http\Controllers\ShadController::class, 'office']);
Route::post('/add',[App\Http\Controllers\ShadController::class, 'add']);
Route::get('/liste',[App\Http\Controllers\ShadController::class, 'liste']);
Route::get('/detail/{n}',  [App\Http\Controllers\ShadController::class, 'detail']);

Route::get('/detail/{phrase}/{n}',  [App\Http\Controllers\ShadController::class, 'detail'])->where('phrase','.*');

Route::get('/delete/{n}',  [App\Http\Controllers\ShadController::class, 'delete']);