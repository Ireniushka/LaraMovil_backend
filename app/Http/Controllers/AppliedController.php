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

    function informe(Request $request, $offerid){

        $offer = Offer::find($offerid);

        //return $offer;

        $pdf = \PDF::loadFile('http://www.github.com');
        //$pdf = \PDF::loadView('generadorPdf/informes', compact('offer'));
        return $pdf->stream('github.pdf');
       
        //return view('generadorPdf/informes', compact('offer'));

    }

}
