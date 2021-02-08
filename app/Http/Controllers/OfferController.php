<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    function index()
    {
        $offers = Offer::paginate(5);
        return view('generadorPdf/ofertas', compact('offers'));
    }
}
