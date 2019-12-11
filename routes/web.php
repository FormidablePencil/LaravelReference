<?php

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

//* when the user makes a GET request to the home page in response we are loading a view. In this case welcome
Route::get('/', function () {
    return view('welcome'); //*we want a view called welcome. View is the html portian of your code base.
});
Route::get('/helloworld', function () { //* this time when the user visits /welcome url we'll return a string  
    return 'Hello world';
});
Route::get('/json', function () {
    return ['foo' => 'bar'];
});
Route::get('test', function () {
    return view('test');
});

