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
        $data = User::all();
        foreach ($data as $user) {
            $user_id = $user->id;
            $status = $user->status;
        }
        dd($user_id);
        $data2 = Absen::all()->where('user',$user_id);
    }
}
