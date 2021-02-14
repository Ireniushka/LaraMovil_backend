<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    // public $offers_class;

    // public function construct($param) {
    //     if($param=='1'){
    //         $this->offers_class = Offer::get();
    //     }
    //     else{
    //         $anio1 = substr($param, 0,4);
    //         $anio2 = substr($param, 5,8);

    //         $this->offers_class = Offer::whereYear('date_max', '>=', $anio1)->WhereYear('date_max', '<=', $anio2)->get();
    //     }

    
    // }

    public function index()
    {
        $offers = Offer::orderBy('date_max', 'DESC')->paginate(5);
        // $this->construct(1);
        $message = "Se estan mostrando todas las ofertas existentes";
        // return $this->offers_class->all();
        return view('generadorPdf/ofertas', compact('offers', 'message'));
    }

    // public function informe(){
    //     $offers = $this->offers_class->all();

    //     $pdf = \PDF::loadView('generadorPdf/informesOfertas', compact('offers'));
        
    //     return $pdf->stream();
    // }

    public function consulta(Request $request){

        $anio1 = substr(request()->anios, 0,4);
        $anio2 = substr(request()->anios, 5,8);

        if($anio2 == $anio1+1)
        {
            $offers = Offer::whereYear('date_max', '>=', $anio1)->WhereYear('date_max', '<=', $anio2)->orderBy('date_max', 'DESC')->get();

            $curso = request()->anios;
            // $this->construct(request()->anios);
            // $this->offers_class = Offer::whereYear('date_max', '>=', $anio1)->WhereYear('date_max', '<=', $anio2);
            // return $this->offers_class->all();

            $pdf = \PDF::loadView('generadorPdf/informesOfertas', compact('offers', 'curso'));
        
            return $pdf->stream();
        }

        else
        {
            $offers = Offer::orderBy('date_max', 'DESC')->paginate(5);

            // $this->construct(1);

            $message = "No ha introducido bien el curso escolar. Estas son todas las ofertas existentes:";
            
            return view('generadorPdf/ofertas', compact('offers', 'message'));
        }


    }
}
