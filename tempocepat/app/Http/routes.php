<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::group(['middleware' => ['web']], function () {
Route::get('laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
// }

Route::get('scapi', 'HomeController@scapi');
Route::get('sc', 'HomeController@soundcloud');

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

// Route::get('home', array('as' => 'home', 'uses' => function(){
//   return view('home');
// }));


Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('social/login/redirect/{provider}', ['uses' => 'Auth\AuthController@redirectToProvider', 'as' => 'social.login']);
Route::get('social/login/{provider}', 'Auth\AuthController@handleProviderCallback');

// Redirect to github to authenticate
// Route::get('github', 'AccountController@github_redirect');
// Get back to redirect url
// Route::get('githubtempocepat/account/github', 'AccountController@github');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


Route::group(['middleware' => 'web'], function () {
	Route::auth();
	Route::get('/dashboard', 'HomeController@dashboard');
	Route::get('/dashboard/data', 'AuthorsController@member_data');
	Route::get('/dashboard/data/edit', 'AuthorsController@member_data_edit');
	Route::get('/dashboard/events', 'AuthorsController@member_events');
	Route::get('/dashboard/wishlist', 'AuthorsController@member_wishlist');
	Route::get('/dashboard/playlist', 'AuthorsController@member_playlist');
	Route::get('/dashboard/additional', 'AuthorsController@member_additional');
	Route::get('/dashboard/your_events',  [
	'as' => 'dashboard.your_events',
	'uses' => 'AuthorsController@member_your_events']);
	Route::get('/dashboard/your_store/{slug}', [
	'as' => 'dashboard.your_store',
	'uses' => 'AuthorsController@member_your_store']);
	Route::get('/dashboard/your_musician/{slug}',  [
	'as' => 'dashboard.your_musician',
	'uses' => 'AuthorsController@member_your_musician']);

	Route::post('/musician/do_crop', 'AuthorsController@do_crop');

	Route::post('/store/do_crop', 'AuthorsController@do_crop');

	// Route::get('/laravelfilemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
	
});

Route::post('/submitcomment', 'HomeController@submit_comment');
Route::post('/deletecomment', 'HomeController@delete_comment');
Route::post('/updatecomment', 'HomeController@update_comment');

Route::post('/like', 'HomeController@like');

// Route::post('/submitcomment', function(){
// 	return Response::json('berhasil');
// });

Route::get('/settings/new', array('as'=>'settings.new','uses'=>'HomeController@add'));
Route::post('/settings/create', array('as'=>'settings.new','uses'=>'HomeController@create'));


/*
Route::get('admin/authors', array('as'=>'admin.authors.index','before'=>'auth', function () {
if(Entrust::hasRole('admin')){
	$action = 'index';
	return App::make('App\Http\Controllers\AuthorsController')->$action();
}elseif(Entrust::hasRole('member')){
	$action = 'denied';
	return App::make('App\Http\Controllers\AuthorsController')->$action();
}else{
	Auth::logout();
	return Redirect::to('auth/login');
}
return App::abort(403);
}));
*/

Route::group(['prefix'=>'admin', 'middleware' => ['auth', 'role:admin']], function () {//
	Route::resource('authors', 'AuthorsController');
});


// Route::group(['middleware' => ['web']], function () {

	// Route::get('member', 'WelcomeController@index');
	// Route::get('home', 'HomeController@home');
// Route::get( 'home', [
// 	'as' => 'home',
// 	'uses' => 'HomeController@home'
// ]);

// });

// Route::get( '/auth/register', [
// 	'as' => '/auth/register',
// 	'uses' => 'AuthController@create'
// ]);

// Route::get( 'joko', [
// 	'as' => 'joko',
// 	'uses' => 'HomeController@joko'
// ]);

Route::get( '/', [
	'as' => '/',
	'uses' => 'HomeController@index'
]);
//-------------------------------------------

Route::get( 'events', [
	'as' => 'events',
	'uses' => 'HomeController@events'
]);
Route::get( 'event/details/{id}', [
	'as' => 'event.details',
	'uses' => 'HomeController@events_details'
]);

Route::get( 'market', [
	'as' => 'market',
	'uses' => 'HomeController@market'
]);
Route::get( 'product/details/{id}', [
	'as' => 'product.details',
	'uses' => 'HomeController@product_details'
]);

Route::get( 'garage', [
	'as' => 'garage',
	'uses' => 'HomeController@garage'
]);

Route::get( 'blog', [
	'as' => 'blog',
	'uses' => 'HomeController@blog'
]);
Route::get( 'blog/details/{slug}', [
	'as' => 'blog.details',
	'uses' => 'HomeController@blog_details'
]);

//-------------------------------------------

Route::get( 'store/details/{id}', [
	'as' => 'store',
	'uses' => 'HomeController@store'
]);

//-------------------------------------------

Route::get( 'signup', [
	'as' => 'signup',
	'uses' => 'UserController@signup'
]);

Route::get( 'profile', [
	'as' => 'profile',
	'uses' => 'UserController@profile'
]);

Route::get( 'profile/participatedevents', [
	'as' => 'profile.participated.events',
	'uses' => 'UserController@participated_events'
]);

Route::get( 'profile/wishlist', [
	'as' => 'profile.wishlist',
	'uses' => 'UserController@wishlist'
]);

Route::get( 'profile/likedmusics', [
	'as' => 'profile.liked.musics',
	'uses' => 'UserController@liked_musics'
]);

//-------------------------------------------
//member
//-------------------------------------------
//user
//-----
Route::post( 'user/store', [
	'as' => 'user.store',
	'uses' => 'UserController@store'
]);
Route::get( 'user/account', [
	'as' => 'user.account',
	'uses' => 'UserController@user_account'
]);
//---
Route::get( 'user/{id}/edit', [
	'as' => 'edit.user',
	'uses' => 'UserController@edit_user'
]);
Route::post('user/update', [
	'uses' => 'UserController@put_update_user'
]);
Route::get('user/delete/{id}', [
	'uses' => 'UserController@destroy_user'
]);
Route::post('user/deleteinside', [
	'uses' => 'UserController@destroy_inside_user'
]);
//---
//music
//-----
Route::get( 'music/create', [
	'as' => 'music.create',
	'uses' => 'GarageController@create_music'
]);
Route::post('music/post', [
	'as' => 'post.music',
	'uses' => 'GarageController@post_music'
]);
Route::get( 'music/{id}/edit', [
	'as' => 'edit.music',
	'uses' => 'GarageController@edit_music'
]);
Route::post('music/update', [
	'uses' => 'GarageController@put_update_music'
]);
Route::get('music/delete/{id}', [
	'uses' => 'GarageController@destroy_music'
]);
Route::post('music/deleteinside', [
	'uses' => 'GarageController@destroy_inside_music'
]);
//musician
//-----
Route::get( 'musician/songs', [
	'as' => 'musician.songs',
	'uses' => 'HomeController@song_musicians'
]);
Route::get( 'musician/profile/{slug}', [
	'as' => 'musician.profile',
	'uses' => 'HomeController@profile_musicians'
]);
Route::get( 'musician/list', [
	'as' => 'musician.list',
	'uses' => 'HomeController@list_musicians'
	// 'uses' => 'HomeController@loadMore'
]);
Route::get( 'musician/create', [
	'as' => 'musician.create',
	'uses' => 'GarageController@create_musician'
]);
Route::post('musician/post', [
	'as' => 'post.musician',
	'uses' => 'GarageController@post_musician'
]);
Route::get( 'musician/{id}/edit', [
	'as' => 'edit.musician',
	'uses' => 'GarageController@edit_musician'
]);
Route::post('musician/update', [
	'uses' => 'GarageController@put_update_musician'
]);
Route::get('musician/delete/{id}', [
	'uses' => 'GarageController@destroy_musician'
]);
Route::post('musician/deleteinside', [
	'uses' => 'GarageController@destroy_inside_musician'
]);
//product
//-----
Route::get( 'product/create', [
	'as' => 'product.create',
	'uses' => 'MarketController@create_product'
]);
Route::post('product/post', [
	'as' => 'post.product',
	'uses' => 'MarketController@post_product'
]);
Route::get( 'product/{id}/edit', [
	'as' => 'edit.product',
	'uses' => 'MarketController@edit_product'
]);
Route::post('product/update', [
	'uses' => 'MarketController@put_update_product'
]);
Route::get('product/delete/{id}', [
	'uses' => 'MarketController@destroy_product'
]);
Route::post('product/deleteinside', [
	'uses' => 'MarketController@destroy_inside_product'
]);
//productcategory
//-----
Route::get( 'productcategory/create', [
	'as' => 'productcategory.create',
	'uses' => 'MarketController@create_product_category'
]);
Route::post('productcategory/post', [
	'as' => 'post.productcategory',
	'uses' => 'MarketController@post_productcategory'
]);
Route::get( 'productcategory/{id}/edit', [
	'as' => 'edit.productcategory',
	'uses' => 'MarketController@edit_productcategory'
]);
Route::post('productcategory/update', [
	'uses' => 'MarketController@put_update_productcategory'
]);
Route::get('productcategory/delete/{id}', [
	'uses' => 'MarketController@destroy_productcategory'
]);
Route::post('productcategory/deleteinside', [
	'uses' => 'MarketController@destroy_inside_productcategory'
]);
//store
//-----
Route::get( 'store/list', [
	'as' => 'store.list',
	'uses' => 'HomeController@list_stores'
]);
Route::get( 'store/create', [
	'as' => 'store.create',
	'uses' => 'MarketController@create_store'
]);
Route::post('store/post', [
	'as' => 'post.store',
	'uses' => 'MarketController@post_store'
]);
Route::get( 'store/{id}/edit', [
	'as' => 'edit.store',
	'uses' => 'MarketController@edit_store'
]);
Route::post('store/update', [
	'uses' => 'MarketController@put_update_store'
]);
Route::get('store/delete/{id}', [
	'uses' => 'MarketController@destroy_store'
]);
Route::post('store/deleteinside', [
	'uses' => 'MarketController@destroy_inside_store'
]);
//lookbook
//-----
Route::get( 'lookbook/create', [
	'as' => 'lookbook.create',
	'uses' => 'MarketController@create_lookbook'
]);
Route::post('lookbook/post', [
	'as' => 'post.lookbook',
	'uses' => 'MarketController@post_lookbook'
]);
Route::get( 'lookbook/{id}/edit', [
	'as' => 'edit.lookbook',
	'uses' => 'MarketController@edit_lookbook'
]);
Route::post('lookbook/update', [
	'uses' => 'MarketController@put_update_lookbook'
]);
Route::get('lookbook/delete/{id}', [
	'uses' => 'MarketController@destroy_lookbook'
]);
Route::post('lookbook/deleteinside', [
	'uses' => 'MarketController@destroy_inside_lookbook'
]);
//event
//-----
Route::get( 'event/create', [
	'as' => 'event.create',
	'uses' => 'EventController@create_event'
]);
Route::post('event/post', [
	'as' => 'post.event',
	'uses' => 'EventController@post_event'
]);
Route::get( 'event/{id}/edit', [
	'as' => 'edit.event',
	'uses' => 'EventController@edit_event'
]);
Route::post('event/update', [
	'uses' => 'EventController@put_update_event'
]);
Route::get('event/delete/{id}', [
	'uses' => 'EventController@destroy_event'
]);
Route::post('event/deleteinside', [
	'uses' => 'EventController@destroy_inside_event'
]);

//-------------------------------------------
//developer
//-------------------------------------------
//blog
//-----
Route::get( 'blog/create', [
	'as' => 'create.blog',
	'uses' => 'BlogController@create_blog'
]);
Route::post('blog/post', [
	'as' => 'post.blog',
	'uses' => 'BlogController@post_blog'
]);
Route::get( 'blog/{id}/edit', [
	'as' => 'edit.blog',
	'uses' => 'BlogController@edit_blog'
]);
Route::post('blog/update', [
	'uses' => 'BlogController@put_update_blog'
]);
Route::get('blog/delete/{id}', [
	'uses' => 'BlogController@destroy_blog'
]);
Route::post('blog/deleteinside', [
	'uses' => 'BlogController@destroy_inside_blog'
]);

//-------------------------------------------

// Route::auth();
// Route::get('/home', 'HomeController@index');

//-------------------------------------------
//dashboard
//-------------------------------------------
Route::get( '/dashboard-data-member', [
	'as' => 'dashboard.data.member',
	'uses' => 'HomeController@dashboard_data_member'
]);
Route::post( '/dashboard-data-member/update', [
	'as' => 'dashboard.data.member.update',
	'uses' => 'UserController@put_update_user'
]);
Route::get( '/dashboard-list-store', [
	'as' => 'dashboard.list.store',
	'uses' => 'HomeController@dashboard_list_store'
]);
Route::get( '/dashboard-list-product', [
	'as' => 'dashboard.list.product',
	'uses' => 'HomeController@dashboard_list_product'
]);
Route::get( '/dashboard-list-musician', [
	'as' => 'dashboard.list.musician',
	'uses' => 'HomeController@dashboard_list_musician'
]);
Route::get( '/dashboard-list-music', [
	'as' => 'dashboard.list.music',
	'uses' => 'HomeController@dashboard_list_music'
]);
Route::get( '/dashboard-list-event', [
	'as' => 'dashboard.list.event',
	'uses' => 'HomeController@dashboard_list_event'
]);
Route::get( '/dashboard-list-article', [
	'as' => 'dashboard.list.article',
	'uses' => 'HomeController@dashboard_list_article'
]);
Route::get( '/dashboard-list-user', [
	'as' => 'dashboard.list.user',
	'uses' => 'HomeController@dashboard_list_user'
]);
//-------------------------------------------


//-------------------------------------------
//info
//-------------------------------------------
Route::get( '/info/faq', [
	'as' => 'info.faq',
	'uses' => 'InfoController@faq'
]);
Route::get( '/info/term', [
	'as' => 'info.term',
	'uses' => 'InfoController@term'
]);
Route::get( '/info/policy', [
	'as' => 'info.policy',
	'uses' => 'InfoController@policy'
]);
//-------------------------------------------


//-------------------------------------------
//landing
//-------------------------------------------
Route::get( '/landing/web', [
	'as' => 'landing.web',
	'uses' => 'LandingController@web'
]);
//-------------------------------------------
