<?php

namespace App\Http\Controllers;

use App\Models\A2017Dato;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function datos_2017()
    {
        $datos_2017 = A2017Dato::paginate(15);
        return view('datos.2017', compact('datos_2017'));
    }
}
