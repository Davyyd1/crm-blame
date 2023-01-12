<?php

namespace App\Http\Controllers;

use App\Models\Colaboratori;
use App\Models\IstoricProiecte;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Http\Controllers\ContentTypes\Timestamp;

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

    public function realizeazaPlata($id, Request $request, Colaboratori $colaborator)
    {
        $suma = $request->input('introduSuma') + 0;
        $time = Carbon::now()->format('Y/m/d');
        DB::table('IstoricProiecte')->insert([
            'action_type' => 'plata',
            'colaboratori_id' => $id,
            'suma' => $suma,
            'data' => $time //FIXME in baza de date de verificat 13.01.2023
        ]);
        return back();
    }
}
