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
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function (){
//return 'Hello World';
//});





Route::get('/', 'StudentController@home');
Route::get('blog-details/{id}', 'StudentController@blogDetails');
Route::get('blog-details/{id}', 'StudentController@commentDetails');


Route::get('/about', 'StudentController@about');
Route::get('/support', 'StudentController@support');
Route::get('/blog', 'StudentController@blog');
Route::get('/contact', 'StudentController@contact');
Route::post('/new-student', 'StudentController@saveStudent');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/category/add', 'CategoryController@addCategory');
Route::post('/category/new', 'CategoryController@saveCategoryInfo');
Route::get('/category/manage-category', 'CategoryController@manage');
Route::get('/category/edit/{id}', 'CategoryController@editCategoryInfo');
Route::post('/category/update', 'CategoryController@updateCategoryInfo');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategoryinfo');


Route::get('/category/unpublished/{id}', 'CategoryController@unpublishedCategoryInfo');
Route::get('/category/published/{id}', 'CategoryController@publishedCategoryInfo');


Route::get('/blog/add', 'BlogController@addBlog');
Route::get('/blog/manage-blog', 'BlogController@manage');
Route::post('/blog/new', 'BlogController@saveBlogInfo');
Route::get('/blog/details/{id}', 'BlogController@viewBlogDetailsInfo');
Route::get('/blog/edit/{id}', 'BlogController@editBlogInfo');
Route::post('/blog/update', 'BlogController@updateBlogInfo');
Route::get('/blog/unpublished/{id}', 'BlogController@unpublishedBlogInfo');
Route::get('/blog/published/{id}', 'BlogController@publishedBlogInfo');
Route::get('/blog/delete/{id}', 'BlogController@deleteBloginfo');



Route::get('/user-login', 'CustomerController@showLoginForm');
Route::post('/user-login', 'CustomerController@userLogin');

Route::get('/logout', 'CustomerController@userLogout');

Route::get('/customer-registration', 'CustomerController@showRegistrationForm');
Route::post('/customer-registration', 'CustomerController@saveCustomerInfo');


Route::post('/new-comment', 'CommentController@saveCommentInfo');
Route::get('/comment/manage-comment', 'CommentController@manageComment');
Route::get('/comment/details/{id}', 'CommentController@viewCommentDetailsInfo');
Route::get('/comment/unpublished/{id}', 'CommentController@unpublishedCommentInfo');
Route::get('/comment/published/{id}', 'CommentController@publishedCommentInfo');
Route::get('/comment/delete/{id}', 'CommentController@deleteCommentInfo');
