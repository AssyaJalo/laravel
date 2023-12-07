<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function listeFormation(){
        $listesF = Formation::all();
        return view('listeFormation', ['listesF' => $listesF]);
    }
}
