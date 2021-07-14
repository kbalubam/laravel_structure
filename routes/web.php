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
    return view('home');
});

Route::get('/contact/sav', function(){
    return view('infos.contact.sav');
})->name('sav');

Route::get('/contact/partenariat', function (){
    return view ('infos.contact.partenariat');
})->name('partenariat');

Route::get('/contact/info', function(){
    return view ('infos.contact.partenariat.infos');
})->name('infos');


Route::get('/team/front', function(){
    $pers1 =(object)['nom'=>'max','fonction'=>'assistant', 'chemin'=>'']
    return view('team.web.dev.frontend');

})->name('front');

Route::get('/team/back', function(){

    return view('team.web.dev.backend');

})->name('back');




