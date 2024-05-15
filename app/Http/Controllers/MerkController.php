<?php

namespace App\Http\Controllers;
use App\models\merk;

use Illuminate\Http\Request;

class MerkController extends Controller
{
      public function menampilkan(){
        $merk = merk::all();

return view('merk\merk', compact('merk'));

    }
    public function show($id){
        $merk = merk::FindOrFail($id);

return view('merk\showmerk', compact('merk'));

    }

}
