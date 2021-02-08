<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller{
    public function index(){
        return response() -> json(Admin::all(), 200);
    }

    public function store(Request $request){
        try{
            $admin = Admin::create($request -> all());
            return response()->json(['admin'=> $admin->id], 200);
        } catch(\Exception $e){
            $resultado = -1;
            return response()->json(['resultado'=>$resultado],200);
        }
    }

    public function show($id){
        $admin = Admin::find($id);
        return response()->json(['admin'=>$admin], 200);
    }

    public function update(Request $request, $id){
        $admin = Admin::find($id);
        try{
            $resultado = $admin ->update($request->all());
        }catch(\Exception $e){
            $resultado = false;
        }
    
}

    public function destroy($id){
        try{
            $resultado = Admin::destroy($id);
        }catch(\Exception $e){
            $resultado = false;
        }
        return response()->json(["resultado"=>$resultado], 200);
    }
    
}
