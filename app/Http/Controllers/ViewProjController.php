<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proiecte;

class ViewProjController extends Controller
{
    //
    public function view($id)
    {
        $proiecte = Proiecte::find($id);
        return view('view', compact('proiecte'));
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
}
