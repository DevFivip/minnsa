<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use DateTime;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use LaravelQRCode\Facades\QRCode;

class MakePdfController extends Controller
{
    //

    public function make($id)
    {
        $persona = Persona::find($id);

        $fecha_dosis = new DateTime($persona->fecha_vacunacion);
        $fecha_nacimiento = (new DateTime($persona->fecha_nacimiento))->format('d/m/Y');
        $res_fecha_primera_dosis = $fecha_dosis->format('d/m/Y');
        $code = $fecha_dosis->format('W');

        $fecha_segunda_dosis = new DateTime($fecha_dosis->modify('+ 31 day')->format('Y-m-d'));
        $res_fecha_segunda_dosis = $fecha_segunda_dosis->format('d/m/Y');
        $code2 = $fecha_segunda_dosis->format('W') + 3;

        $pdf = new FPDI('L', 'mm', [54, 171.20]);

        $pdf->AddPage();
        $pdf->setSourceFile(__DIR__ . '/../../../resources/pdf/modelo-base.pdf');

        $pdf->SetAutoPageBreak(false);

        $tplIdx = $pdf->importPage(1);
        $pdf->useTemplate($tplIdx);


        $pdf->SetFont('Arial', 'B', '5');

        //Apellidos
        $pdf->SetXY(2.2, 18);
        $pdf->Write(1, utf8_decode(strtoupper($persona->apellidos)));

        //Nombres
        $pdf->SetXY(2.2, 20);
        $pdf->Write(1, utf8_decode(strtoupper($persona->nombres)));

        //Fecha de Nacimiento
        $pdf->SetFont('Arial', 'B', '7');
        $pdf->SetXY(27, 22.5);
        $pdf->Write(1, $fecha_nacimiento);

        //Sexo
        $pdf->SetFont('Arial', '', '14');
        $pdf->SetXY(43.5, 22);
        $pdf->Write(1, $persona->sexo);

        //Documentos
        $pdf->SetFont('Arial', 'B', '6');
        $pdf->SetXY(2.2, 30);
        $pdf->Write(1, strtoupper($persona->tipo_documento . ': ' . $persona->num_documento));

        //Nacionalidad
        $pdf->SetFont('Arial', 'B', '8');
        $pdf->SetXY(27, 30);
        $pdf->Write(1, strtoupper($persona->nacionalidad));




        //Fecha 1era dosis
        $pdf->SetFont('Arial', 'B', '4');
        $pdf->SetXY(3.5, 38);
        $pdf->Write(10, strtoupper($res_fecha_primera_dosis));

        //Fecha 2da dosis
        $pdf->SetFont('Arial', 'B', '4');
        $pdf->SetXY(3.5, 42.5);
        $pdf->Write(10, strtoupper($res_fecha_segunda_dosis));

        //Fabricante Lote 1era dosis
        $pdf->SetFont('Arial', 'B', '4');
        $pdf->SetXY(35.5, 38);
        $pdf->Write(10, strtoupper('SINOPHARM (B20210822' . $code . ')'));

        //Fabricante Lote 2da dosis
        $pdf->SetFont('Arial', 'B', '4');
        $pdf->SetXY(35.5, 42.5);
        $pdf->Write(10, strtoupper('SINOPHARM (B20210822' . $code2 . ')'));


        //Lugar Lote 1era dosis
        $zona = $persona->sitio_vacunacion;

        if ($zona == 'sur') {
            $pdf->SetFont('Arial', 'B', '2.80');
            $pdf->SetXY(59, 37);
            $pdf->Write(10, strtoupper('LIMA SUR - Jockey Club del Peru'));
            $pdf->SetXY(60, 39);
            $pdf->Write(10, strtoupper('Lima - Lima Santiago de Surco'));
        }

        if ($zona == 'norte') {
            $pdf->SetFont('Arial', 'B', '2.80');
            $pdf->SetXY(57, 37);
            $pdf->Write(10, strtoupper('LIMA NORTE - Universidad Cesar Vallejo'));
            $pdf->SetXY(63, 39);
            $pdf->Write(10, strtoupper('Lima - Lima Los Olivos'));
        }
        if ($zona == 'piura') {
            $pdf->SetFont('Arial', 'B', '2.80');
            $pdf->SetXY(57, 37);
            $pdf->Write(10, strtoupper('PIURA - Universidad Privada De Piura'));
            $pdf->SetXY(63, 39);
            $pdf->Write(10, strtoupper('Piura Piura Piura'));
        }

        if ($zona == 'sur') {
            $pdf->SetFont('Arial', 'B', '2.80');
            $pdf->SetXY(59, 41.5);
            $pdf->Write(10, strtoupper('LIMA SUR - Jockey Club del Peru'));
            $pdf->SetXY(60, 43.5);
            $pdf->Write(10, strtoupper('Lima - Lima Santiago de Surco'));
        }

        if ($zona == 'norte') {
            $pdf->SetFont('Arial', 'B', '2.80');
            $pdf->SetXY(57, 41.5);
            $pdf->Write(10, strtoupper('LIMA NORTE - Universidad Cesar Vallejo'));
            $pdf->SetXY(63, 43.5);
            $pdf->Write(10, strtoupper('Lima - Lima Los Olivos'));
        }

        if ($zona == 'piura') {
            $pdf->SetFont('Arial', 'B', '2.80');
            $pdf->SetXY(57, 41.5);
            $pdf->Write(10, strtoupper('PIURA - Universidad Privada De Piura'));
            $pdf->SetXY(63, 43.5);
            $pdf->Write(10, strtoupper('Piura Piura Piura'));
        }



        $link = env('APP_URL') . "/publico/certificado/index?Tk=" . $persona->qr;

        QRCode::text($link)->setSize(10)->setMargin(0)->setOutfile('../storage/app/public/qr/' . $persona->id . '.png')->png();

        $pdf->Image('../storage/app/public/qr/' . $persona->id . '.png', 60, 17, 15, 15);


        $pdf->Image('../resources/pdf/firma.pdf', 45, 17, 15, 15);



        return $pdf->Output(strtoupper($persona->nombres) . ' ' . strtoupper($persona->apellidos) . '.pdf', 'D');
    }
}
