<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Product::class, function (Faker $faker) {
    return [
        'ProductName' => $faker->name,
        'EAN' => $faker->numerify('##########'),
        'Type' =>$faker->word,
        'Weight' => $faker->randomDigit, // password
        'Color' => $faker->colorName,
        'Active' => $faker->word,
        'Image' => 'https://picsum.photos/50/70',
        'quantity' =>  $faker->randomDigit,
        'price' => $faker->randomDigit,
        ///'created_at' => $this->faker->dateTimeBetween('-90 days', '-10 days'),
      

      
           
            
           
    ];
    
});
