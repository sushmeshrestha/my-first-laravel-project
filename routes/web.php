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
*
 *
 */


Route::get('/', function () {
    return view( "welcome" );
});

Route::post('validate', 'ProjectsController@validateCredentials');

Route::get('validate', function()
{
    return View::make('members/login');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('projects', 'ProjectsController');
/*Route::get('projects/edit/{id}', 'ProjectsController@project.edit');*/
Route::get('home/getdata', 'ProjectsController@getdata')->name('home.getdata');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
