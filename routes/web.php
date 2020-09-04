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

$pagesController = 'PagesController';

Route::get('about', $pagesController . '@about')->name('about');
Route::get('building', $pagesController . '@building')->name('building');
Route::get('contacts', $pagesController . '@contacts')->name('contacts');
Route::get('machine', $pagesController . '@machine');
Route::get('machines_all', $pagesController . '@machinesAll')->name('machines_all');
Route::get('machines_category/{category}', $pagesController . '@machinesCategory')->name('machines_category');
Route::get('/', $pagesController . '@main')->name('main');
Route::get('vacancies', $pagesController . '@vacancies')->name('vacancies');
