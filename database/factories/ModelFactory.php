<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use CodeDelivery\Models\Category;
use CodeDelivery\Models\Client;
use CodeDelivery\Models\Product;
use CodeDelivery\Models\Order;
use CodeDelivery\Models\OrderItem;

$factory->define(CodeDelivery\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Category::class,function (Faker\Generator $faker){

    return  [
        'name' => $faker->word
    ];
});
$factory->define(Product::class,function (Faker\Generator $faker){

    return  [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'price' => $faker->numberBetween(10,50) // valores entre 10 e 50
    ];

// ou podemos utilizar o Eloquent collection para inserir o id estrangeiro  do campo category_id

//  ex:  'category_id' => Category::all()->random()->id, // inseri id randomicos
});
$factory->define(Client::class,function (Faker\Generator $faker){

    return  [
        'phone' => $faker->phoneNumber,
        'address'=> $faker->address,
        'city'=> $faker->city,
        'state'=> $faker->state,
        'zipcode'=> $faker->postcode

    ];
});
$factory->define(Order::class,function (Faker\Generator $faker){

    return  [
        'total' => rand(50,100),
        'status'=> 0,

    ];
});
$factory->define(OrderItem::class,function (Faker\Generator $faker){

    return  [
        'product_id' => rand(1,10),
        'order_id' => rand(1,10),
        'price' => rand(10,100),
        'qtd' => rand(1,10),

    ];
});