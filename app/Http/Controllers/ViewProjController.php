<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Colaboratori;
use Illuminate\Http\Request;
use App\Models\Proiecte;
use App\Models\IstoricProiecte;
use Illuminate\Support\Facades\DB;

class ViewProjController extends Controller
{
    //
    public function view($id)
    {
        $proiecte = Proiecte::find($id);
        $istoric = IstoricProiecte::all();
        $colaborator = Colaboratori::all();
        // $ist = DB::table('IstoricProiecte')->select('IstoricProiecte.*')->join('Proiecte', 'id', '=', 'IstoricProiecte.id_proiect')->where('id', $id)->get();
        return view('view', compact('proiecte', 'istoric', 'colaborator'));
    }

    public function updateProj(Request $request, $id)
    {
        $proiecte = Proiecte::find($id);
        $proiecte->Denumire_Proiect = $request->input('denumire_proiect');
        $proiecte->Firma_Client = $request->input('firma_client');
        $proiecte->Reprezentant_Firma = $request->input('reprezentant_firma');
        $proiecte->Contact_Client = $request->input('contact_client');
        $proiecte->Suma_Proiect = $request->input('suma_proiect');
        $proiecte->Numar_Transe = $request->input('numar_transe');
        $proiecte->update();
        return redirect('/home');
    }

    public function saveProjDet(Request $request, IstoricProiecte $istoric)
    {
        $istoric->proiecte_id = $request->input('id_proiect');
        $istoric->action_type = $request->Status_Tranzactii;
        $istoric->colaborator_id = $request->Colab_id;
        $istoric->suma = $request->suma;
        $istoric->data = $request->data;
        $istoric->save();
        return back();
    }
}
