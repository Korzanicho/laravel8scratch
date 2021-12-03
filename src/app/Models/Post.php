<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");

        if (! file_exists($path)) throw new ModelNotFoundException();

        $post = cache()->remember("posts.{$slug}", now()->addMinute(20), function() use ($path) {
            return file_get_contents($path);
        });

        return view('post', ['post' => file_get_contents($path)]);
    }

    public static function all(): array {
        $files = File::files(resource_path("posts/"));

        return array_map(function($file) {
            return $file->getContents();
        }, $files);
    }
}
