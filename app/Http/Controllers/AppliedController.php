<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cicle;
use App\Offer;

class AppliedController extends Controller
{
    function index()
    {
        $cicles = Cicle::all();
        $offers = Offer::paginate(5);
        return view('generadorPdf/alumnos', compact('cicles', 'offers'));
    }

    function informe(Request $offer){
        $pdf = \PDF::loadView('generadorPdf/informes', compact('offer'));
        // Para crear un pdf en el navegador usaremos la siguiente línea 
        return $pdf->stream();

    }

}
