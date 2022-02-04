<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    //

    public function index(Request $request)
    {
        try {
            $query = $request->all();
            $qr = $query['Tk'];
            $persona = Persona::where('qr', $qr)->first();
            return view('certificado', ["status" => true, "persona" => $persona]);
        } catch (\Throwable $th) {
            return view('certificado', ["status" => false]);
        }
    }
}
