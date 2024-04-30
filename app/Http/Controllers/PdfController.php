<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Vocalista;

use Illuminate\Http\Request;



class PdfController extends Controller
{
    public function gerarPdf()
    {


        $dados = Vocalista::orderByDesc('created_at')->get();

        $pdf = Pdf::loadView('vocalistas.gerar-pdf', ['dados' => $dados]);

        return $pdf->download('louvores_do_dia.pdf');

    }
}
