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

//rout saya
Route::get('/about', function () {
    return '<h1>hallo</h1>'
        . 'selamat datang di web app saya <br>'
        . 'laravel, memang keren.';
});
//buat basic to view

Route::get('animals', function () {
    $king = 'lion';
    $hewan = ['monkey', 'dragonfly', 'tiger', 'butterfly', 'crocodile'];
    return view('animals_page', compact('king', 'hewan'));
});
//rout buah
Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view("vegetable_page", ["buah" => $fruit]);
});

//rout parameter
Route::get('product/{name}', function ($name) {
    return "produk:$name";
});

//tugas
Route::get('data/{name}/{bb}/{tb}', function ($name, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);
    if ($bmi > 30) {
        $ket = "obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekurangan gizi";
    }
    return "nama:$name<br>"
        . "berat badan:$bb<br>"
        . " tinggi badan:$tb<br>"
        . "nilai BMI:$bmi<br>"
        . " Keterangan:$ket<br>"
    ;
});
