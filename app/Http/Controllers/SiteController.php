<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicOfert;
use App\Models\Admission_profile;

class SiteController extends Controller
{
    //
    function index(){
        return view('index_site');
    }

    function oferta_academica($id){
        $adProfile = AcademicOfert::find($id)->Admission_profile;
        return view('oferta_academica', compact('adProfile'));
    }

    function difusion_universitaria(){
        return view('difucion_universitaria_index');
    }
}
