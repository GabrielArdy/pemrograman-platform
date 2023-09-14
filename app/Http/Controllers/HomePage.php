<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage extends Controller
{
    public function selamatDatang()
    {
        return view('home');
    }

    public function hitung(Request $req)
    {
        echo $req->x + $req->y;
    }
}
