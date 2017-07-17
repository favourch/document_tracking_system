<?php

Route::group(array('middleware' => 'guest'), function() {
	
	Route::get('/auth/login', array(
        'as' => 'login',
        'uses' => 'WelcomeController@login'
    ));
	
	Route::get('/guest/contact-us', array(
        'as' => 'contact-us',
        'uses' => 'WelcomeController@contactUs'
    ));
	
	Route::get('/guest/faq', array(
        'as' => 'faq',
        'uses' => 'WelcomeController@faq'
    ));
	
    Route::post('/auth/login', array(
        'as' => 'post-login',
        'uses' => 'WelcomeController@postLogin'
    ));
});
Route::group(array('middleware' => 'auth'), function() {
	
	Route::get('user1/dashboard', array(
        'as' => 'user1Dashboard',
        'uses' => 'WelcomeController@user1dashboard'
    ));
	Route::get('/dashboard', array(
        'as' => 'dashboard',
        'uses' => 'WelcomeController@user1dashboard'
    ));
	Route::get('/admin/create', array(
        'as' => 'create',
        'uses' => 'WelcomeController@create'
    ));
	
	Route::get('/admin/input', array(
        'as' => 'input',
        'uses' => 'WelcomeController@input'
    ));
    
	Route::post('/admin/input', array(
        'as' => 'post-input',
        'uses' => 'WelcomeController@postInput'
    ));
	
    Route::post('/admin/create', array(
        'as' => 'post-create',
        'uses' => 'WelcomeController@postCreate'
    ));
	Route::get('/admin/logout', array(
			'as' => 'logout',
			'uses' => 'WelcomeController@getLogout'
		));
	Route::get('/admin/add-applicant', array(
			'as' => 'add-applicant',
			'uses' => 'WelcomeController@getAddApplicant'
		));
	Route::post('/admin/add-applicant', array(
        'as' => 'post-add-applicant',
        'uses' => 'WelcomeController@postAddApplicant'
    ));
	Route::get('/admin/list-applicant', array(
			'as' => 'list-applicant',
			'uses' => 'WelcomeController@getListApplicant'
		));
	Route::get('/admin/calendar', array(
			'as' => 'calendar',
			'uses' => 'WelcomeController@getCalendar'
		));
	
});