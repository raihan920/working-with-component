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
    return view('welcome');
});

Route::get('/home/{themeName?}', function ($themeName='theme1') {
    // $themeProperty = '';
    // switch($themeName){
    //     case 'theme1':
    //         $themeProperty = '';
    //         break;
    //     case 'theme2':
    //         $themeProperty = 'midnight-blue-bg light-cyan-text';
    //         break;
    //     default:
    //         break;
    // }
    return view('app', compact('themeName'));
})->name('themeName');
