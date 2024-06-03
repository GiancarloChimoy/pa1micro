<?php

namespace App\Http\Controllers;
use App\Models\Curso;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'codigo' => 'required|string|unique:cursos|max:255',
            'nombre' => 'required|string|max:255',
        ]);

        // Crear un nuevo curso con los datos validados
        $curso = new Curso([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
        ]);

        // Guardar el curso en la base de datos
        $curso->save();

        // Redireccionar a la vista que desees con un mensaje de éxito
        return redirect()->route('admin.teacher')->with('status', 'curso registrado con éxito');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
