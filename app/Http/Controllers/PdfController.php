<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generatePdf()
    {
        // Generamos la URL de la vista
        $url = route('invoice'); // Suponiendo que la vista 'invoice' tiene una ruta llamada 'invoice'

        // Generamos el PDF
        Browsershot::url($url)
            ->setOption('no-sandbox', true)  // Configuración para entornos de servidor
            ->pdf(public_path('invoice.pdf'));  // Guarda el PDF en la carpeta public

        return response()->download(public_path('invoice.pdf')); // Descarga el PDF generado
    }
}
