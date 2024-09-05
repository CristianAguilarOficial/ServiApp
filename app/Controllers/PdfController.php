<?php

namespace App\Controllers;

require 'vendor/autoload.php';

use App\Models\UserplantillaModelo;
use Dompdf\Dompdf;
use Dompdf\Options;

class PdfController extends BaseController
{

    public function index()
    {
        $userplantillaModelo = new UserplantillaModelo();
        $dato['plantillauser'] = $userplantillaModelo->findAll();

        return view('facturasPdf/plantillafinalizada', $dato);
    }




    public function new()
    {

        $userplantillaModelo = new UserplantillaModelo();
        $dato['plantillauser'] = $userplantillaModelo->findAll();

        return view('facturasPdf/print', $dato);
    }


    public function adminfact()
    {
        return view('adminfacturas');
    }


    public function generarPdf()
    {

        $userplantillaModelo = new UserplantillaModelo();
        $dato['plantillauser'] = $userplantillaModelo->findAll();


        // Configuración de Dompdf
        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);

        // Cargar la vista con los datos
        $html = view('facturasPdf/print', $dato);

        // Renderizar el PDF
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        //date
        $date = date('y-m-d');

        //nombrar la varible filename
        $filename = "prueba_$date.php";

        // Enviar el PDF al navegador
        //$dompdf->stream($filename, array("Attachment" => 0)); // Cambia a 1 para forzar la descarga

        // Obtener el contenido del PDF
        $pdfContent = $dompdf->output();

        // Guardar el archivo PDF en una carpeta accesible para el administrador
        $filePath = WRITEPATH . 'uploads/reporte_usuario.pdf';
        file_put_contents($filePath, $pdfContent);

        return redirect()->back()->with('message', 'El PDF ha sido generado y guardado correctamente.');
    }
}
