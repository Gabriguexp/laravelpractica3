<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reparacion;

class ReparacionController extends Controller{
    public function index(){
        return response() -> json(Reparacion::all(), 200);
    }

    public function store(Request $request){
        try{
            $reparacion = Reparacion::create($request -> all());
            return response()->json(['reparacion'=> $reparacion->id], 200);
        } catch(\Exception $e){
            $resultado = -1;
            return response()->json(['resultado'=>$resultado],200);
        }
    }

    public function show($id){
        $reparacion = Reparacion::find($id);
        return response()->json(['reparacion'=>$reparacion], 200);
    }

    public function update(Request $request, $id){
        $reparacion = Reparacion::find($id);
        try{
            $resultado = $reparacion ->update($request->all());
        }catch(\Exception $e){
            $resultado = false;
        }
    
}

    public function destroy($id){
        try{
            $resultado = Reparacion::destroy($id);
        }catch(\Exception $e){
            $resultado = false;
        }
        return response()->json(["resultado"=>$resultado], 200);
    }

}
