<?php

namespace App\Http\Controllers;

class MedicController extends Controller{
    public function inicio(){
        return view('medic.historial');
    }

    public function crear(){
        return view('medic.crear');
    }

    public function usuarios(){
        return view('medic.usuario');
    }

    public function configuracion(){
        return view('medic.configuracion');
    }
}