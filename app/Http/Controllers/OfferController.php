<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::paginate(5);
        return view('generadorPdf/ofertas', compact('offers'));
    }

    public function informe(){

        //$offer = Offer::find($offerid);
        //$offers = $request->offers;
        //return $offer;
        $offers = Offer::all();
        $pdf = \PDF::loadView('generadorPdf/informesOfertas', compact('offers'));
        return $pdf->stream();
       //dd($request);

    }

    public function consulta(){

    }
}
