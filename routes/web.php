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


// $address = Address::with('users')->get();
$users = User::with('address')->get();

// $users[0]->addresses()->create([
//     'country' => 'Nepal'
// ]);

return view('user', compact('users'));

});



Route::get('/posts', function () {
    // Post::create([
    //     'user_id' => 1,
    //     'title' => 'post title 1',
    // ]);

    // Post::create([
    //     'user_id' => 2,
    //     'title' => 'post title 2',
    // ]);

    $posts = Post::get();

    return view('posts', compact('posts'));
});
