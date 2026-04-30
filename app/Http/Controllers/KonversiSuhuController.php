<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonversiSuhuController extends Controller
{
    public function index(){
        return view('suhu');
    }

    public function hitung(Request $request){
        $nilai = $request -> nilai_awal;
        $dari  = $request -> dari;
        $ke    = $request -> ke;

        //Konversi ke Celsius
        if($dari == 'celsius'){
            $celcius = $nilai;
        } elseif ($dari == 'fahrenheit'){
            $celcius = ($nilai - 32) * 5 / 9;
        } elseif ($dari == 'kelvin'){
            $celcius = ($nilai - 273.15);
        } elseif ($dari == 'reamur'){
            $celcius = $nilai * 5 / 4;
        }

        //Dari Celcius ke tujuan
        if($ke == 'celsius'){
            $hasil = $celcius;
        } elseif ($ke == 'fahrenheit'){
            $hasil = ($celcius * 9 / 5) + 32;
        } elseif ($ke == 'kelvin'){
            $hasil = $celcius + 273.15;
        } elseif ($ke = 'reamur'){
            $hasil = $celcius * 4 / 5;
        }

        return view('suhu', [
            'hasil' => round($hasil, 2),
            'nilai' => $nilai,
            'dari'  => $dari,
            'ke'    => $ke
        ]);
    }
}
