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

Route::get('/', function(){
    return view('welcome');
});

Route::get('travels','PageController@index')->name('travels');
Route::get('travels/{travel}','PageController@show')->name('travel');

/*
Pacchetti viaggi
Model: Travel
Migration: Travels
- id
- country
- data di partenza
- data di ritorno
- hotel
Controller: PageController / TravelController
Routes: 
- Travels
- Travels/1

Agenzia viaggi - Blog
Model: Blog
Migration: Blogs
- id
- date
- description
- gallery
- services
- activities
- bar
- Restaurant
- pool
- beach
Controller: BlogController
Routes: 
- Blogs
- Blogs/1

 */
