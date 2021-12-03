<?php

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

Route::get('/', function () {

    return view('posts', [
        'posts' => \App\Models\Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {

    $post = \App\Models\Post::find($slug);

    return view('post', [
        'post' => $post
    ]);

//    $path = __DIR__ . "/../resources/posts/{$slug}.html";
    //    ddd($path);

    // if (! file_exists($path)) dd('file not exist');
    // if (! file_exists($path)) abort(404);
//    if (! file_exists($path)) return redirect('/');
//
//    $post = cache()->remember("posts.{$slug}", now()->addMinute(20), function() use ($path) {
//        var_dump('nie idzie z cachu');
//        return file_get_contents($path);
//    });
//
//    return view('post', ['post' => file_get_contents($path)]);

 })->where('post', '[A-z_\-]+');
//})->whereAlpha('post');
