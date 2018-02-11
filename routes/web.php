<?php
// get method

// get main page
Route::get('/', 'HomeController@index')->name('home');
// get recipe by id
Route::get('recipePost/{id}', 'postController@index')->name('recipePost');

// post method

// add recipe
Route::post('addRecipe', 'HomeController@addRecipe')->name('addRecipe');
//  add comment method
Route::post('recipePost/{id}', 'postController@addComment')->name('recipePost');
// search recipes post
Route::post('search', 'HomeController@search')->name('search');


// methods for authentication
Auth::routes();





