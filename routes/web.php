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
    return view('welcome');
});

Route::get('/pizzas', function () {
//    return view('pizzas');  //returning a view
//    return "pizzas!";  //returning a string
//    return ['name' => 'veg pizzas', 'base'=> 'classic']; //return an array (transformed into json through laravel)
    // $pizza = [
    //     'type' => 'hawaiian',
    //     'base' => 'garlic',
    //     'price' => 10
    // ];

    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];

    //get data from db
    return view('pizzas', ['pizzas' => $pizzas]);  //returning a view with passed datas view('nameOfView', ['key' => ])
});

