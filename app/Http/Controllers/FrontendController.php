<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class FrontendController extends Controller
{
    public function index()
    {
        $paket = Menu::where('jenis', 'Paket')->get();
        $satuan = Menu::where('jenis', 'Satuan')->get();

        return view('frontend.index', compact('paket', 'satuan'));
    }

    public function menu()
    {
        $menus = Menu::all();
        return view('frontend.menu', compact('menus'));
    }

    public function kontak()
    {
        return view('frontend.kontak');
    }
}
