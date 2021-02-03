<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;

class ConsolaController extends Controller{

    public function index(){
        return response()->json(Consola::all(), 200);
    }

    public function store(Request $request){
        try{
            $consola = Consola::create($request->all());
            return response()->json(['consola'=> $consola->id], 200);
        } catch(\Exception $e){
            $resultado = -1;
            return response()->json(['resultado'=>$resultado],200);
        }
    }

    public function show($id){
        $consola = Consola::find($id);
        return response()->json(['carta'=>$consola], 200);
    }

    public function update(Request $request, $id){
        $consola = Consola::find($id);
        try{
            $resultado = $consola ->update($request->all());
        }catch(\Exception $e){
            $resultado = false;
        }
    }

    public function destroy($id){
        try{
            $resultado = Consola::destroy($id);
        }catch(\Exception $e){
            $resultado = false;
        }
        return response()->json(["resultado"=>$resultado], 200);
    }
}
