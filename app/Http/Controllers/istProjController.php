<?php

namespace App\Http\Controllers;

use App\Models\Colaboratori;
use App\Models\IstoricProiecte;
use App\Models\Proiecte;
use Carbon\Carbon;
use Illuminate\Http\Request;

class istProjController extends Controller
{
    public function viewIstProj($id)
    {
        $proiecte = Proiecte::find($id);
        $istoric = IstoricProiecte::findOrFail($id);
        $colaborator = Colaboratori::all();
        $time = Carbon::now()->format('m/d/Y');
        // $ist = DB::table('IstoricProiecte')->select('IstoricProiecte.*')->join('Proiecte', 'id', '=', 'IstoricProiecte.id_proiect')->where('id', $id)->get();
        return view('istProj', compact('proiecte', 'istoric', 'colaborator', 'time'));
    }

    public function updateIstProj(Request $request, $id)
    {
        $istoric = IstoricProiecte::find($id);
        $istoric->action_type = $request->input('Status_Tranzactii');
        $istoric->colaboratori_id = $request->input('Colab_id');
        $istoric->suma = $request->input('suma_proiect');
        $istoric->data = $request->input('data');
        $istoric->update();
        return redirect('/home');
    }

    public function deleteIstProj($id)
    {
        $istoric = IstoricProiecte::findOrFail($id);
        $istoric->delete();
        return back();
    }
}
