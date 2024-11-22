<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class personacontroller extends Controller
{
    public function getpersona(){
        return response()->json(persona::all(),200);
    }
    public function getpersonaid($id){
        $persona = persona::find($id);
        if(is_null($persona)){
            return response()->json(['Mensaje'=>'No enconrtado'],404);
        }
        return response()->json($persona::find($id),200);
    }
    public function insertpersona(Request $request){
        $persona = persona::create($request->all());
        return response()->json($persona,201);
    }    
    public function updatepersona(Request $request){
        $persona = persona::find($request->id);
        if(is_null($persona)){
            return response()->json(['Mensaje'=> 'No encontrado'],404);
        }
        $persona->update($request->all());
        return
    }
}
