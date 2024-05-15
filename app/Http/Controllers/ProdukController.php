<?php

namespace App\Http\Controllers;
use App\models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk(){
        $post = produk::all();

return view('produk\list_produk', compact('post'));
    }

    public function show($id){
        $produk = produk::FindOrFail($id);

return view('produk\show_produk', compact('produk'));

    }


}
