<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class OLD
{

    public $title;

    public $summary;

    public $date;

    public $body;

    public $slug;

    public function __construct($title, $summary, $date, $body, $slug)

    {
        $this->title = $title;
        $this->summary = $summary;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache()->rememberForever('ads.all', function () {
            return collect(File::files(resource_path("ads")))
                ->map(fn($file) => yamlFrontMatter::parseFile($file))
                ->map(fn($document) => new OLD(
                    $document->title,
                    $document->summary,
                    $document->date,
                    $document->body(),
                    $document->slug
                ))
                ->sortByDesc('date');
        });

    }


    public static function find($slug)

    {
        return static::all()->firstWhere('slug', $slug);
    }
}
