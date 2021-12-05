<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use phpDocumentor\Reflection\Types\Collection;

class Post
{
    public $title;

    public $slug;

    public $excerpt;

    public $date;

    public $body;

    /**
     * Post constructor.
     * @param $title
     * @param $excerpt
     * @param $date
     * @param $body
     */
    public function __construct($title, $slug, $excerpt, $date, $body)
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug)
    {
        $post = static::find('slug', $slug);

        if (! $post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }

    public static function all(): \Illuminate\Support\Collection {
        return cache()->rememberForever('posts.all', function() {
            return collect(\Illuminate\Support\Facades\File::files(resource_path("posts")))
                ->map(function ($file) {
                    return \Spatie\YamlFrontMatter\YamlFrontMatter::parseFile($file);
                })
                ->map(function ($document) {

                    return new \App\Models\Post(
                        $document->title,
                        $document->slug,
                        $document->excerpt,
                        $document->date,
                        $document->body()
                    );
                })
                ->sortByDesc('date');
        });
    }
}
