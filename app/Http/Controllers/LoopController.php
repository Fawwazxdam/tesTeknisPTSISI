<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
    function segitiga(Request $request)
    {
        $q = $request['numb'];
        // $s = "";
        // $p = "";
        // $r = "";
        // for ($i = 1; $i <= $q; $i++) {
        //     for ($j = $i; $j <= $q - 1; $j++) {
        //         $s += "&nbsp;";
        //     }
        //     for ($k = 1; $k <= $i; $k++) {
        //         $p += " *";
        //     }
        //     $r+= "<br>";
        // }
        return view('segitiga',compact('q'));
    }
    
    function angka(Request $request)
    {
        $a = $request['numb'];
        return view('angka',compact('a'));
    }
}
