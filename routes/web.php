<?php

use App\Models\barang;
use App\Models\siswa;
use App\Models\post;
use App\Models\pengguna;
use App\Models\telepon;
use App\Models\merk;
use App\Models\produk;
use App\Models\transaksi;
// pemanggilan controller
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MerkController;




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

//Route optional parameter->ditandai dengan ?(tanda tanya)
Route::get('myname/{name?}', function ($name = "wandi") {
    return "Mt name is $name";
});

//menampilkan data dari database post
Route::get('/post', function () {
    $data = post::all();
    return view('tampilan_post', compact('data'));


});
//menampilkan data dari database barang
Route::get('/barang', function () {
    $data = barang::all();
   return view('tampilan_barang', compact('data'));


});
//menampilkan data dari database siswa
Route::get('/siswa', function () {
    //menampilkan semuah data
    $data = siswa::all();
    //memanggil data menggunakan id
    //$data = siswa::find(5);
    //memanggil data dengan fild yang kita mau
    // $data = siswa::where('alamat','like','%Rancamanyar%')->get();
   /* $data = new siswa;
    $data->nama="wandi";
    $data->jenis_kelamin="laki-laki";
    $data->alamat="sayuran";
    $data->agama = "islam";
    $data->telepon= 9082;
    $data->email= "wandi@gmail.com";
    $data->save();*/


    return view('tampilan_siswa', compact('data'));


});
//menampilkan data dari database pengguna
Route::get('/pengguna', function () {
    $data = pengguna::all();
    return view('tampilan_pengguna', compact('data'));

});
//menampilkan data dari database telepon
Route::get('/telepon', function () {
    $data = telepon::all();
    return view('tampilan_telepon', compact('data'));

});
//menampilkan data dari database merk
Route::get('/merk', function () {
    $data = merk::all();
    return view('tampilan_merk', compact('data'));

});
//menampilkan data dari database produk
Route::get('/produk', function () {
    $data = produk::all();
    return view('tampilan_produk', compact('data'));

});
//menampilkan data dari database transaksi
Route::get('/transaksi', function () {
    $data = transaksi::all();
    return view('tampilan_transaksi', compact('data'));

});

//menampilkan menggunakan controller
Route::get('post', [PostController::class, 'menampilkan']);
 Route::get('post/{id}', [PostController::class, 'show']);


//menampilkan data dari database list produk
Route::get('list_produk', [ProdukController::class, 'produk']);

Route::get('list_produk/{id}', [ProdukController::class, 'show']);

//menampilkan data dari database merk
Route::get('merks', [MerkController::class, 'menampilkan']);

Route::get('merks/{id}', [MerkController::class, 'show']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// brand
use App\Http\Controllers\brandController;
Route::resource('brand', brandController::class);
