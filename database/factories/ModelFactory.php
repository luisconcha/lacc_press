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
use LACCPress\LACCCategory\Models\Category;
use LACCPress\LACCTag\Models\Tag;

$factory->define( App\User::class, function ( Faker\Generator $faker ) {
		return [
			'name'           => $faker->name,
			'email'          => $faker->safeEmail,
			'password'       => bcrypt( str_random( 10 ) ),
			'remember_token' => str_random( 10 ),
		];
} );
$factory->define( Category::class, function ( Faker\Generator $faker ) {
		return [
			'name'   => $faker->name,
			'active' => true,
		];
} );
$factory->define( Tag::class, function ( Faker\Generator $faker ) {
		return [
			'name' => $faker->word
		];
} );
