<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});




/*frondend end*/

/*admin location start*/

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){

    Route::get('/',function (){
        return view('admin.index');
    });
    Route::resource('product','ProductController');
    Route::resource('category','CategoriesController');
});

/*admin location end*/
