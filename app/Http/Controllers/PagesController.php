<?php

namespace App\Http\Controllers;

use App\Models\A2017Dato;
use App\Models\A2018Dato;
use App\Models\A2019Dato;
use App\Models\A2020Dato;
use App\Models\A2021Dato;
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
    
    public function datos_2018()
    {
        $datos_2018 = A2018Dato::paginate(15);
        return view('datos.2018', compact('datos_2018'));
    }    
    
    public function datos_2019()
    {
        $datos_2019 = A2019Dato::paginate(15);
        return view('datos.2019', compact('datos_2019'));
    }

    public function datos_2020()
    {
        $datos_2020 = A2020Dato::paginate(15);
        return view('datos.2020', compact('datos_2020'));
    }    
    
    public function datos_2021()
    {
        $datos_2021 = A2021Dato::paginate(15);
        return view('datos.2021', compact('datos_2021'));
    }
}
