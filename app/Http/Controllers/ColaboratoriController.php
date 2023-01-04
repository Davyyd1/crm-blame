<?php

namespace App\Http\Controllers;

use App\Models\Colaboratori;
use Illuminate\Http\Request;

class ColaboratoriController extends Controller
{
    public function viewColaboratori()
    {
        $colaborator = Colaboratori::all();
        $colaborator = Colaboratori::paginate(10);
        return view('colaboratori', compact('colaborator'));
    }
}
