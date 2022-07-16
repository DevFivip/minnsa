<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use LaravelQRCode\Facades\QRCode;


class PersonaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personas = Persona::orderBy('id', 'DESC')->get();
        return view('persona.index', ["personas" => $personas]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('persona.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['qr'] = Hash::make(implode("", $data));
        $link = env('APP_URL') . "/publico/certificado/index?Tk=" . $data['qr'];

        //
        try {
            $persona = Persona::create($data);
            QRCode::text($link)->setSize(10)->setMargin(0)->setOutfile('../storage/app/public/qr/' . $persona->id . '.png')->png();
        } catch (\Throwable $th) {
            //throw $th;
            return response('Error Complete todo el formulario ó estas credenciales ya estan en uso', 404);
        }

        return redirect('/persona');
        // return view('formulario', ["success" => true, "persona" => $persona]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $persona = Persona::find($id);

        $documentos = ['CI' => 'CEDULA', 'PASS' => 'PASSPORT', 'DNI' => 'DNI', 'CPP' => 'CPP', 'CE' => 'CARNET DE EXTRANJERIA'];
        $sexos = ['M' => 'MASCULINO', 'F' => 'FEMENINO'];
        $lugares = ['norte' => 'LIMA NORTE', 'sur' => 'LIMA SUR'];

        $nacimiento = new DateTime($persona->fecha_nacimiento);
        $fecha_n = $nacimiento->format('Y-m-d');
        // $hora_n = $nacimiento->format('H:i');
        // $fecha_nacimiento = $fecha_n . 'T' . $hora_n;


        $vacunacion = new DateTime($persona->fecha_vacunacion);
        $fecha_v = $vacunacion->format('Y-m-d');
        // $hora_v = $vacunacion->format('H:i');
        // $fecha_vacunacion = $fecha_v . 'T' . $hora_v;

        return view('persona.edit', compact('persona', 'documentos', 'sexos', 'fecha_n', 'fecha_v', 'lugares'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $persona = Persona::find($id);
        $persona->update($data);

        return redirect('persona');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id)->delete();
        return response()->json(['status' => true, 'persona' => $persona], 200);
        //
    }
    public function pagar($id)
    {
        $persona = Persona::find($id);
        $persona->update(['status' => ($persona->status === '0') ? '1' : '0']);
        return $persona;
    }
}
