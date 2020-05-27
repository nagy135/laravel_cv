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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/personal', 'PersonalController@index')->name('personal');
Route::get('/education', 'EducationController@index')->name('education');
Route::get('/experience', 'ExperienceController@index')->name('experience');
Route::get('/skill', 'SkillController@index')->name('skill');
Route::get('/contact', 'ContactController@index')->name('contact');
