<?php

namespace App\Http\Controllers;

use App\Models\Colaboratori;
use App\Models\IstoricProiecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColaboratoriController extends Controller
{
    public function viewColaboratori()
    {
        $colaborator = Colaboratori::all();
        $colaborator = Colaboratori::withSum('IstoricProiecte', 'suma')->get();
        $colaboratorPaginare = Colaboratori::paginate(10);
        $calc = DB::table('IstoricProiecte')->sum('suma');
        return view('colaboratori', compact('colaborator', 'calc', 'colaboratorPaginare'));
    }

    public function realizeazaPlata()
    {
        return back();
    }
}
