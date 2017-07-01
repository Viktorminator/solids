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

Route::get('/', 'PostController@index');

// Route::get('/parse', 'ParseController@index');
// Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');

Route::get('/home', ['as' => 'home', 'uses' => 'PostController@index']); // authentification
Route::get('/pozvonite-mne.html', [ 'as' => '/pozvonite-mne.html','uses' => 'PostController@callme']);
Route::get('/search', ['as' => 'search', 'uses' => 'GoogleSearchController@index']);
Route::get('/{year}/', ['uses' => 'PostController@archive'])->where('year','201[2-7]');
Route::get('/{alias}/', ['uses' => 'PostController@aliasToView']);
Route::get('{alias}', ['as' => 'home', 'uses' => 'PostController@aliasToView']);
Route::get('/o-kompanii.html', ['as' => 'o-kompanii.html', 'uses' => 'PostController@about']);

Route::post('/sendmail', ['as' => 'sendmail', function() {
    $validation = validator(
        request()->only('form-person', 'form-phone','form-email', 'form-company', 'form-question'),
        [
            'form-person' => 'required',
            'form-email' => 'required|email',
            'form-question' => 'required'
        ]
    );
    if ($validation->passes()) {
        dd('Все нужные поля заполнены!');
    }
    return redirect()->back()->withErrors($validation->errors());
}]);

Route::get('/stati.html', ['as' => 'stati.html', 'uses' => 'PostController@articles']);
Route::get('/novosti.html', ['as' => 'novosti.html', 'uses' => 'PostController@news']);

// user check
Route::group(['middleware' => ['auth']], function(){
    // new form show
    Route::get('new-post','PostController@create');
    // store new post
    Route::post('new-post','PostController@store');
    // edit post form
    Route::get('edit/{slug}','PostController@edit');
    // update post
    Route::post('update','PostController@update');
    // delete post
    Route::get('delete/{id}','PostController@delete');
    // show all posts
    Route::get('my-posts','UserController@user_posts_all');
    // show all drafts
    Route::get('my-drafts','UserController@user_posts_drafts');
    // add quote
    Route::post('quote/add','QuoteController@store');
    // remove quote
    Route::post('quote/delete/{id}','QuoteController@destroy');
});
// User profiles
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// Posts list
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// Show one post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9_]+');
Auth::routes();

Route::get('/home', 'HomeController@index');
