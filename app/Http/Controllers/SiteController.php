<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    function index(){
        return view('index_site');
    }

    function oferta_academica(){
        return view('oferta_academica');
    }

    function difusion_universitaria(){
        return view('difucion_universitaria_index');
    }
}
