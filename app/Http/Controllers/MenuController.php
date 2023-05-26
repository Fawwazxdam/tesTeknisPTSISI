<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Menu::all();
        $data2 = Level::all();
        return view('menu',compact('data','data2'));
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
        $data = $request->all();
        // dd($data);
        $data['menu_icon'] = $request->file('menu_icon')->store('img/menu');
        Menu::create($data);
        return redirect('menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $data = $request->all();
        try {
            $data['menu_icon'] = $request->file('menu_icon')->store('img/menu');
            $menu->update($data);
        } catch (\Throwable $th) {
            $data['menu_icon'] = $menu->menu_icon;
            $menu->update($data);
        }
        return redirect('menu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // dd($menu);
        $menu->delete($menu);
        return redirect('menu');
    }
}
