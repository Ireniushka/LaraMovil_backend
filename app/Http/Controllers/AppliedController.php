<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cicle;
use App\Offer;
use App\User;

class AppliedController extends Controller
{
    public function index()
    {
        $cicles = Cicle::all();
        $offers = Offer::paginate(5);

        return view('generadorPdf/alumnos', compact('cicles', 'offers'));
    }

    public function informe($offerid){

        $offer = Offer::find($offerid);

        if($offer->applieds()->count() == 0){
            return back()->with('alert', '');
        }
        else{
            $users = User::whereIn('id', function ($query) use ($offerid){
                $query->select('user_id')->from('applieds')->where('offer_id', $offerid);
            })->get();
    
            $pdf = \PDF::loadView('generadorPdf/informesAlumnos', compact('users', 'offer'));
            return $pdf->stream();
        }

    }


    public function consulta(Request $request){

        if(request()->select == 'todos')
        {
            $offers = Offer::paginate(5);
        }
        else{
            $offers = Offer::where('cicle_id', request()->select)->paginate(5);
        }
        
        $cicles = Cicle::all();

        return view('generadorPdf/alumnos', compact('cicles', 'offers'));
    }

}
