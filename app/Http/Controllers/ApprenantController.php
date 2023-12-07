<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function listeApprenant(){
        $listesA = Apprenant::all();
        return view('listeApprenant', ['listesA' => $listesA]);
    }
}
