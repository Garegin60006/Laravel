<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\Address;
use App\Models\User;
use Faker\Extension\AddressExtension;
use App\Models\Post;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index']);


Route::get('/user', function () {


// $users = User::has('posts', '>=', 1)->with('posts')->get();

$users = User::doesntHave('posts')->with('posts')->get();


return view('user', compact('users'));

});



Route::get('/posts', function () {

    $posts = Post::get();

    return view('posts', compact('posts'));
});
