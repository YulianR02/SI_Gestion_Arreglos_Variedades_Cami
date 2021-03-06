<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify'=> true]);

/**Route of users */
Route::get('/','WebController@index')->name('web.index');

// Route::get('/no-encontrado','WebController@notFound')->name('web.notFound');

// Route::get('/blog','WebController@blog')->name('web.blog');

// Route::get('/blog/{slug}','WebController@blogDetails')->name('web.blogDetails');

Route::get('/categorias','WebController@category')->name('web.category');

// Route::get('/checkout','WebController@checkout')->name('web.checkout');

// Route::get('/contacto','WebController@contact')->name('web.contact');

// Route::get('/producto/{slug}','WebController@detail')->name('web.detail');

// Route::get('/preguntas-frecuentes','WebController@faq')->name('web.faq');

// Route::get('/lista-de-deseos','WebController@myWishlist')->name('web.myWishlist');

// Route::get('/comparacion-de-productos','WebController@productComparison')->name('web.productComparison');

// Route::get('/carrito-de-compras','WebController@shoppingCart')->name('web.shoppingCart');

// Route::get('/registrarse','WebController@signIn')->name('web.signIn');

// Route::get('/terminos-y-condiciones','WebController@termsConditions')->name('web.termsConditions');

// Route::get('/rastrea-tu-orden','WebController@trackOrders')->name('web.trackOrders');





// /**Routes of Admins */
// Route::resource('admin/','HomeController')->names('homes');

Route::resource('admin/categories','CategoryController')->names('categories');

Route::get('admin/category/{module}','CategoryController@module')->name('categories.module');

Route::resource('admin/subcategories','SubcategoryController')->names('subcategories');

// Route::resource('admin/posts','PostController')->names('posts');

Route::resource('admin/arreglos','ArregloController')->names('arreglos');

Route::resource('user/misarreglos','misArreglosController' )->names('misarreglos');

Route::resource('admin/products','ProductController')->names('products');

Route::resource('admin/apartados','ApartadoController')->names('apartados');

Route::resource('user/misapartadps','misApartadosController' )->names('misapartados');

Route::resource('admin/users','UserController')->names('users');

Route::resource('admin/roles', RoleController::class)->names('roles');

Route::resource('user/profile','ProfileUserController' )->names('users.profile');

// Route::post('/comment/store','CommetController@store')->name('comment.add');

// Route::post('/reply/store','CommetController@replyStore')->name('reply.add');

// Route::post('/commentProduct/store','CommetController@productStore')->name('productComment.add');

// Route::post('/replyProduct/store','CommetController@productReplyStore')->name('productReply.add');

// Route::delete('/reply/destroy/{commet}','CommetController@destroy')->name('comment.destroy');

// Route::get('/reply/{commet}/edit','CommetController@edit')->name('comment.edit');

// Route::put('/reply/{commet}','CommetController@update')->name('comment.update');





Route::get('/home', 'HomeController@index')->name('home');


