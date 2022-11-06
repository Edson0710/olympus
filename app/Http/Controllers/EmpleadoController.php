<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados/empleadosIndex', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados/empleadosCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreEmpleado' => 'required|string|max:255',
            'rolEmpleado' => 'required|string|max:100', 
            'generoEmpleado' => 'required|string|max:50',
            'telefonoEmpleado' => 'required|digits:10|numeric',
            'curpEmpleado' => 'required|string|size:18',
            'fecha_NacEmpleado' => 'required|date',
            /* 'imagenEmpleado' => 'required', */
        ]);

        Empleado::create($request->all());

        return redirect('/empleado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados/empleadosShow', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados/empleadosEdit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombreEmpleado' => 'required|string|max:255',
            'rolEmpleado' => 'required|string|max:100', 
            'generoEmpleado' => 'required|string|max:50',
            'telefonoEmpleado' => 'required|digits:10|numeric',
            'curpEmpleado' => 'required|string|size:18',
            'fecha_NacEmpleado' => 'required|date',
            /* 'imagenEmpleado' => 'required', */
        ]);

        Empleado::where('id', $empleado->id)->update($request->except('_token', '_method'));

        return redirect('/empleado');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect('/empleado');
    }
}
