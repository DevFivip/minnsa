<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use DateTime;
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

            $nacimiento = new DateTime($persona->fecha_nacimiento);
            $ahora = new DateTime(date("Y-m-d"));
            $diferencia = $ahora->diff($nacimiento);
            $edad =  $diferencia->format("%y");

            return view('certificado', ["status" => true, "persona" => $persona, "edad" => $edad]);
        } catch (\Throwable $th) {
            return view('certificado', ["status" => false]);
        }
    }
}
