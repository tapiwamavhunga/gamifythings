<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\IndexController;



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

Route::get('/', [IndexController::class, 'welcome'])->name('welcome');





Route::get('/challenges', function () {
    return view('challenges');
});


Route::get('/champions', function () {
    return view('champions');
});



Route::get('/competitions', function () {
    return view('competitions');
});


Route::get('/index', function () {
    return redirect()->action([HomeController::class, 'index']);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'welcome'])->name('home');
Route::get('/user', [UsersController::class, 'index'])->name('user.index');

//Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
Route::resource('users', UsersController::class);
Route::get('/user/profile/{id}', [App\Http\Controllers\UsersController::class, 'profile'])->name('user.profile');

Route::put('/user/updateProfile/{id}', [App\Http\Controllers\UsersController::class, 'updateProfile'])->name('user.updateProfile');

Route::get('/profile/{id}', [App\Http\Controllers\UsersController::class, 'profile'])->name('profile');


Route::get('/my_profile', [App\Http\Controllers\UsersController::class, 'my_profile'])->name('my_profile');


// Route::get('/profile', function () {
//     return view('show_profile');
// });


Route::resource('admin/posts', 'App\Http\Controllers\Admin\PostsController');
Route::resource('admin/champions', 'App\Http\Controllers\Admin\ChampionsController');
Route::resource('admin/competitions', 'App\Http\Controllers\Admin\CompetitionsController');
Route::resource('admin/users', 'App\Http\Controllers\Admin\UsersController');
Route::resource('admin/challenges', 'App\Http\Controllers\Admin\ChallengesController');
Route::resource('admin/challenges', 'App\Http\Controllers\Admin\ChallengesController');
Route::resource('admin/winners', 'App\Http\Controllers\Admin\WinnersController');
Route::resource('admin/badges', 'App\Http\Controllers\Admin\BadgesController');



//Google
Route::get('/login/google/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
//  function () {
//      return Socialite::driver('github')->redirect();
// function () {
//      $user = Socialite::driver('github')->user();

//     // $user->token

//Facebook
Route::get('/login/facebook/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

//Github
Route::get('/login/github/redirect', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);





