<?php

use Baum\Tests\Baseline\Models\BaseLineAlpha;
use Faker\Generator as Faker;

$factory->define(BaseLineAlpha::class, function (Faker $faker) {
    return [
        'value' => $faker->sentence(6),
    ];
});
