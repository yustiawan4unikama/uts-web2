<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhytagorasController extends Controller
{
    public function index(){
        return view('phytagoras');
    }

    public function hitung(Request $request){
        $a = $request -> sisi_alas;
        $b = $request -> sisi_tegak;
        $c = sqrt(($a*$a) + ($b*$b));

        return view('phytagoras', ['hasil' => $c, 'a' => $a, 'b' => $b]);
    }
}
