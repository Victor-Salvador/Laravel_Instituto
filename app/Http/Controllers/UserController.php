<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::role('alumno')->paginate(10);
        $campos = Schema::getColumnListing('alumnos');
        return view("usuarios.listado", compact('campos', 'usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'fecha_nacimiento' => 'required|date',
        ]);


        $user = User::create([
            'name' => $datos['nombre'],
            'apellido' => $datos['apellido'],
            'email' => $datos['email'],
            'fecha_nacimiento' => $datos['fecha_nacimiento']
        ]);

        $user->assignRole('alumno');

        return redirect()->route('usuarios.index');
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
        $alumno = User::role('alumno')->findOrFail($id);
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = User::role('alumno')->findOrFail($id);

        $datos = $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email',
            'fecha_nacimiento' => 'required|date',
        ]);
        $alumno->update($datos);
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno = User::role('alumno')->findOrFail($id);
        $alumno->delete();
        return redirect()->back();
    }
}
