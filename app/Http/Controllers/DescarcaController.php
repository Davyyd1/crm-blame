<?php

namespace App\Http\Controllers;

use App\Models\IstoricProiecte;
use App\Models\Proiecte;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DescarcaController extends Controller
{
    public function descarca($id)
    {
        $proiecte = Proiecte::find($id);
        $time = Carbon::now()->format('m/d/Y');
        $pdf = Pdf::loadView('descarcaPDF', [
            'proiecte' => $proiecte,
            'time' => $time
        ]);
        return $pdf->download('download.pdf');
    }
}
