<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormationController extends Controller
{

    public function index()
    {
        $formations = Formation::all();
        return view ('formations.lists', compact('formations'));
    }
}
