<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
use App\Cicle;

class OfferController extends Controller
{
    public function __construct(){
        
        $this->middleware('admin');
    }
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
        $offers = Offer::select()->orderBy('date_max', 'DESC')->paginate(5);
        // $this->construct(1);
        // return $this->offers_class->all();
        return view('generadorPdf/ofertas', compact('offers'));
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
            $offers = Offer::whereYear('date_max', '>=', $anio1)->WhereYear('date_max', '<=', $anio2)->get();

            if($offers->count()){
                $curso = request()->anios;
                // $this->construct(request()->anios);
                // $this->offers_class = Offer::whereYear('date_max', '>=', $anio1)->WhereYear('date_max', '<=', $anio2);
                // return $this->offers_class->all();

                $cicles = Cicle::all();

                $pdf = \PDF::loadView('generadorPdf/informesOfertas', compact('offers', 'curso', 'cicles'));
            
                return $pdf->stream();
            }
            else{
                $offers = Offer::select()->orderBy('date_max', 'DESC')->paginate(5);

                echo "<script>alert('No se puede generar pdf, no existen registros de ofertas');</script>";
                
                return view('generadorPdf/ofertas', compact('offers'));

            }
            
        }


        else
        {
            $offers = Offer::orderBy('date_max', 'DESC')->paginate(5);

            // $this->construct(1);
            echo "<script>alert('Error. No ha introducido bien el curso escolar');</script>";
            
            return view('generadorPdf/ofertas', compact('offers'));
        }


    }
}
