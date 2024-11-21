<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class personacontroller extends Controller
{
    public function getpersona(){
        return response()->json(persona::all(),200);
    }
    
}
