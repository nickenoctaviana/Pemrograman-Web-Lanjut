<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker ->sentence(),
        'content' => $faker ->realText(200),
        'featured_image' => $faker ->imageUrl(750, 300, 'cats', true),
    ];
});
