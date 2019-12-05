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
    return view('website.design');
});

Auth::routes();
// Auth::routes(['verify' => true]); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/verify', 'VerifyController@getVerify')->name('getverify');
Route::post('/verify', 'VerifyController@postVerify')->name('verify');

Route::get('request', function(){
    return view('website.request');
});


Route::get('faq', function(){
    return view('website.faq');
});
Route::get('pricing', function(){
    return view('website.pricing');
});
Route::post('pricing', 'pricingController@store');
Route::get('pricing_details', 'pricingController@index');

Route::get('support', function(){
    return view('website.support');
})->name('support');

// Route::get('issue', function(){
//     return view('admin.issue');
// });
Route::get('issue', 'IssueController@index');
Route::post('request', 'RequestController@store');
Route::get('security', function(){
    return view('admin.security');
});
Route::get('safety', function(){
    return view('admin.safety');
});
Route::get('mep', function(){
    return view('admin.mep');
});
Route::get('house', function(){
    return view('admin.house');
});
// Route::get('modules', function(){
//     return view('admin.modules');
// });

Route::get('supporting', function(){
    return view('admin.support');
});

Route::get('company', 'CompanyController@index');
Route::post('company', 'CompanyController@store');

Route::get('edit/{id}', 'CompanyController@edit');
Route::get('about', function(){
    return view('website.about');
});
Route::get('package', 'PackagesController@index');
Route::post('package', 'PackagesController@store');