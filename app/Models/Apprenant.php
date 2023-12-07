<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $fillable = array('nom', 'prenom', 'email', 'tel');
    public static $rules = array('nom' => 'required|min:3',
    'prenom' => 'required|min:3',
    'email' => 'required|min:20',
    'tel' => 'required|min:9' );
    //use HasFactory;
}
