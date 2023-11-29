<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante;

class PagesController extends Controller
{
    public function fnIndex(){
        return view ('welcome');
    }
    public function fnLista(){
        $xAlumno = Estudiante:: all();
        return view('pagLista', compact('xAlumno'));
    }
    public function fnGaleria($num=0){
        $valor =$num;
        $otro  = 25;
        return view ('pagGaleria', compact('valor','otro'));
    }
    

    //
}
