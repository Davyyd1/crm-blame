<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticiController extends Controller
{
    public function viewStatistici()
    {
        $cheltuieli23 = DB::table('IstoricProiecte')->select('suma')->where('action_type', '=', 'cheltuiala')->whereYear('data', '=', "2023")->get()->sum('suma') * -1;
        $plati23 = DB::table('IstoricProiecte')->select('suma')->where('action_type', '=', 'plata')->whereYear('data', '=', "2023")->get()->sum('suma');
        $incasari23 = DB::table('IstoricProiecte')->select('suma')->where('action_type', '=', 'incasare')->whereYear('data', '=', "2023")->get()->sum('suma');
        return view('statistici', compact('cheltuieli23', 'plati23', 'incasari23'));
    }
}
