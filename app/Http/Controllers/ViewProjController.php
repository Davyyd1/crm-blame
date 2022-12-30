<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proiecte;

class ViewProjController extends Controller
{
    //
    public function view($id)
    {
        return view('view');
    }
}
