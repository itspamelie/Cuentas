<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $data = Categorie::with(['user'])->get();

        //Siempre que hagamos una api enviamos un JSON
        return response()->json([
            "status"=>"ok",
            "data"=>$data

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //name,type,user_id
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name'=>'required|string|min:2',
            'type'=>'required|string|min:2',
            'user_id'=>'required'
        ]);

        //metodo si los campos se llaman igual que en la base de datos
        $data = Categorie::create($validated);
          return response()->json([
            "status"=>"ok",
            "mesage"=>"Recurso o dato insertado correctamente.",
            "data"=>$data

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
          $data = Categorie::find($id);
        if($data){
            return response()->json([
            "status"=>"ok",
            "mesage"=>"Categoria encontrada.",
            "data"=>$data
        ]);
        }
        return response()->json([
            "status"=>"error",
            "mesage"=>"Categoria no encontrada."
        ],400);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'=>'required|string|min:2',
            'type'=>'required|string|min:2',
            'user_id'=>'required'
        ]);

        //metodo si los campos se llaman igual que en la base de datos
        $data = Categorie::findOrFail($id);
        $data->update($validated);
          return response()->json([
            "status"=>"ok",
            "mesage"=>"Recurso o dato actualizado correctamente.",
            "data"=>$data

        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Categorie::find($id);
        if($data){
            $data->delete();
        }
        return response()->json([
            "status"=>"ok",
            "mesage"=>"Dato eliminado correctamente."
        ]);

    }
}
