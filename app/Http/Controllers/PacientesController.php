<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pacientes = User::where('rol', 'Paciente')->orderByDesc('id')->paginate(8);

        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $datos = $r->validate([
            'nombre' => 'required|string|max:240',
            'apellidos' => 'required|string|max:240',
            'fechaNacimiento' => 'required|date',
            'telefono' => 'required|digits:10',
            'estadoCivil' => 'required|string|max:45',
            'email' => 'required|email|unique:users',
            'domicilio' => 'nullable|max:240'
        ]);

        $nuevoPaciente = new User;
        $nuevoPaciente->nombre = $r->nombre;
        $nuevoPaciente->apellidos = $r->apellidos;
        $nuevoPaciente->fechaNacimiento = $r->fechaNacimiento;
        $nuevoPaciente->telefono = $r->telefono;
        $nuevoPaciente->estadoCivil = $r->estadoCivil;
        $nuevoPaciente->email = $r->email;
        $nuevoPaciente->domicilio = $r->domicilio;
        $np = $nuevoPaciente->save();

        if($np){
            return redirect('pacientes')->with('success', 'Nuevo paciente agregado');
        }
        else{
            return back()->with('fail', 'Algo sucedio y no se pudo agregar el paciente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('pacientes.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pacientes.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $datos = $r->validate([
            'nombre' => 'required|string|max:240',
            'apellidos' => 'required|string|max:240',
            'fechaNacimiento' => 'required|date',
            'telefono' => 'required|digits:10',
            'estadoCivil' => 'required|string|max:45',
            'email' => 'required|email|unique:users,email,'.$id,
            'domicilio' => 'nullable|max:240'
        ]);

        $update = User::findOrFail($id);
        $update->nombre = $r->nombre;
        $update->apellidos = $r->apellidos;
        $update->fechaNacimiento = $r->fechaNacimiento;
        $update->telefono = $r->telefono;
        $update->estadoCivil = $r->estadoCivil;
        $update->email = $r->email;
        $update->domicilio = $r->domicilio;
        $up = $update->save();

        if($up){
            return redirect('pacientes')->with('success', 'Paciente editado correctamente');
        }
        else{
            return back()->with('fail', 'Algo sucedio y no se pudo actualizar los datos del paciente');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = User::findOrFail($id);

        $paciente->delete();

        return redirect()->route('pacientes')->with('success', 'Paciente borrado satisfactoriamente');
    }
}
