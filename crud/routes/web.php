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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

});
/*************START Roters are for the Homepage   *********/
Route::get('/home', 'HomeController@index')->name('home');


/********************Route to book events *******/
Route::get('/event','EventController@displayform');

/***************Route to add an a booking event */
Route::post('/add_data','EventController@save');

/****************Route to Fetch add events after viewing the events *****/
Route::get('add_data','EventController@displayform');

/**************Route to Fetch Display form ********/
Route::get('/eventview','EventController@viewform');

/************Route to Fetch Data in a list */
Route::get('/eventview','EventController@index');



/************ROUTE TO UPDATE DATA */
Route::get('click_edit/{id}','EventController@edit_function');


Route::post('update/{id}','EventController@update_function');


/******Route to Delete Data */

Route::get('click_delete/{id}','EventController@delete_function');