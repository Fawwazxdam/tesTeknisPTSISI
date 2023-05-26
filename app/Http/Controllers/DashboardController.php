<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function masuk()
    {
        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d H:i:s');
        $data3 = Auth::user()->name;
        // dd($data);
        Absen::create([
            'user_id' => Auth::user()->id,
            'status' => 'masuk',
            'cek' => $time,
        ]);
        return view('berhasil',compact('data3'));
    }
    public function izin()
    {
        $data3 = Auth::user()->name;
        return view('izin-page',compact('data3'));
    }
    public function prosesizin(Request $request)
    {
        $data3 = Auth::user()->name;
        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d H:i:s');
        $data = $request->all();
        // dd($data);
        Absen::create([
            'user_id' => Auth::user()->id,
            'status' => 'izin',
            'cek' => $time,
            'checked' => $data['checked']
        ]);
        return view('berhasil',compact('data3'));
    }
    public function cuti()
    {
        $data3 = Auth::user()->name;
        return view('cuti-page',compact('data3'));
    }
    public function prosescuti(Request $request)
    {
        $data3 = Auth::user()->name;
        date_default_timezone_set('Asia/Jakarta');
        $time = date('Y-m-d H:i:s');
        $data = $request->all();
        // dd($data);
        Absen::create([
            'user_id' => Auth::user()->id,
            'status' => 'cuti',
            'cek' => $time,
            'checked' => $data['checked']
        ]);
        return view('berhasil',compact('data3'));
    }
}
