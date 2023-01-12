<?php

namespace App\Http\Controllers;

use App\Models\Colaboratori;
use App\Models\IstoricProiecte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColaboratoriController extends Controller
{
    public function viewColaboratori(Colaboratori $colaborator, Request $request, IstoricProiecte $istoric)
    {
        $colaborator = Colaboratori::all();
        $colaborator = Colaboratori::withSum('IstoricProiecte', 'suma')->get();
        $colaboratorPaginare = Colaboratori::paginate(10);
        $calc = DB::table('IstoricProiecte')->sum('suma');
        return view('colaboratori', compact('colaborator', 'calc', 'colaboratorPaginare'));
    }

    public function realizeazaPlata($id, Request $request, IstoricProiecte $istoric)
    {
        $suma = $request->input('introduSuma') + 0;
        DB::table('IstoricProiecte')->insert([
            'action_type' => 'plata',
            'colaboratori_id' => $id,
            'suma' => $suma,
            'data' => '2023-01-12'
        ]);
        return back();
    }
}
