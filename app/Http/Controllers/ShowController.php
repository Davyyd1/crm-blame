<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proiecte;

class ShowController extends Controller
{
    public function show()
    {
        $data = Proiecte::all();
        $data = Proiecte::paginate(10);
        return view('home', compact('data'));
        //The compact() function is used to convert given variable to to array in which the key of the array will be the name of the variable and the value of the array will be the value of the variable
    }

    public function update(Request $request, Proiecte $proiecte)
    {
        $proiecte = Proiecte::find($request->id);
        $proiecte->Status_Proiect = $request->Status_Proiect;
        $proiecte->save();
        // dd(Proiecte::find($request->id));
        return back();
    }
}
