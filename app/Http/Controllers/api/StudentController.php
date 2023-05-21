<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudiante = new Student();
        $estudiante->Cedula = $request->Cedula;
        $estudiante->Nombre = $request->Nombre;
        $estudiante->Apellido = $request->Apellido;
        $estudiante->fecha = $request->fecha;
        $estudiante->id = $request->id;
        $estudiante->save();
        return json_encode(['estudiante'=>$estudiante]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estudiante = Student::find($id);
        $estudiante = DB::table('students')
        ->orderBy('Cedula')
        ->get();

        return json_encode(['estudiante'=>$estudiante]);

        $estudiante = Student::find($id);
        if (is_null($estudiante)){
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $estudiante = Student::find($id);
        $estudiante->Cedula = $request->Cedula;
        $estudiante->Nombre = $request->Nombre;
        $estudiante->Apellido = $request->Apellido;
        $estudiante->fecha = $request->fecha;
        $estudiante->save();
        return json_encode(['estudiante'=>$estudiante]);

        $estudiante = Student::find($id);
        if (is_null($estudiante)){
            return abort(404);
        }
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Student::find($id);
        $estudiante = delete();
        $estudiante = DB::table('students')
        ->select('students.*')
        ->get();
        return json_encode(['estudiantes'=>$estudiante,'success'=>true]);

        $estudiante = Student::find($id);
        if (is_null($estudiante)){
            return abort(404);
        }
    }
}
