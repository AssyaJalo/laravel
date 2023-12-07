<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = array('nom', 'description', 'duree', 'prix');
    public static $rules = array('nom' => 'required|min:3',
    'description' => 'required|min:20',
    'duree' => 'required|min:3',
    'prix' => 'required|min20' );
    //use HasFactory;
}
