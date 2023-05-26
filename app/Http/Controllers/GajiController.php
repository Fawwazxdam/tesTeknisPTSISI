<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\User;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('gaji',compact('data'));
    }
    
    public function show(string $id)
    {
        $data = User::findorFail($id);
        $user_id = $data['id'];
        $nama = $data['name'];
        $role = $data['role'];
        $data2 = Absen::all()->where('user_id', '=', $user_id)
        ->where('status','=','masuk');
        // dd($data2);
        $hari = count($data2);

        function gaji($hari,$role)
        {

            if ($role == "0") {
                return $hari * 100000;
            } else if ($role == "1") {
                return $hari * 75000;
            } else {
                return $hari * 50000;
            }
        }
        $gaji = gaji($hari, $role);
        return view('detailgaji',compact('gaji','nama'));
    }
}
