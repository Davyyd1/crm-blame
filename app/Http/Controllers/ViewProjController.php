<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proiecte;

class ViewProjController extends Controller
{
    //
    public function view(Request $request)
    {
        return view('view');
    }
}
