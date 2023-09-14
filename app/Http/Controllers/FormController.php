<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function selamatDatang()
    {
        return view('landing');
    }

    public function greeting(Request $data)
    {
        return view('greeting')->with(["nama" => $data->nama, "kelas" => $data->kelas]);
    }
}
