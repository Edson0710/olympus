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
        $rules = [
            'nombreEmpleado' => 'required|string|max:255',
            'rolEmpleado' => 'required|string|max:100',
            'generoEmpleado' => 'required|string|max:50',
            'telefonoEmpleado' => 'required|digits:10|numeric',
            'curpEmpleado' => 'required|string|size:18',
            'fecha_NacEmpleado' => 'required|date',
        ];

        $messages = [
            'nombreEmpleado.required' => 'El nombre del empleado es obligatorio.',
            'nombreEmpleado.max' => 'El nombre del empleado supera los 255 carácteres.',
            'rolEmpleado.required' => 'El rol del empleado es obligatorio.',
            'rolEmpleado.max' => 'El rol del empleado supera los 100 carácteres.',
            'generoEmpleado.required' => 'El genero del empleado es obligatorio.',
            'generoEmpleado.max' => 'El genero del empleado supera los 50 carácteres.',
            'telefonoEmpleado.required' => 'El teléfono del empleado es obligatorio.',
            'telefonoEmpleado.digits' => 'El teléfono debe ser de 10 digitos.',
            'telefonoEmpleado.numeric' => 'El teléfono solo acepta carácteres numéricos.',
            'curpEmpleado.required' => 'La CURP debe ser obligatoria.',
            'curpEmpleado.size' => 'El tamaño de la CURP debe ser de 18 carácteres.',
            'fecha_NacEmpleado.required' => 'La fecha del empleado es obligatoria.',
            'fecha_NacEmpleado.date' => 'La fecha del empleado debe ser un formato válido de fecha.',
        ];

        $this->validate($request, $rules, $messages);
        
        /* $request->validate([
            'nombreEmpleado' => 'required|string|max:255',
            'rolEmpleado' => 'required|string|max:100', 
            'generoEmpleado' => 'required|string|max:50',
            'telefonoEmpleado' => 'required|digits:10|numeric',
            'curpEmpleado' => 'required|string|size:18',
            'fecha_NacEmpleado' => 'required|date',
            'imagenEmpleado' => 'required',
        ]); */

        Empleado::create($request->all());

        $notification = 'El Empleado ha sido creado correctamente.';

        return redirect('/empleado')->with(compact('notification'));
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
        $updateName = $empleado->nombreEmpleado;

        $rules = [
            'nombreEmpleado' => 'required|string|max:255',
            'rolEmpleado' => 'required|string|max:100',
            'generoEmpleado' => 'required|string|max:50',
            'telefonoEmpleado' => 'required|digits:10|numeric',
            'curpEmpleado' => 'required|string|size:18',
            'fecha_NacEmpleado' => 'required|date',
        ];

        $messages = [
            'nombreEmpleado.required' => 'El nombre del empleado es obligatorio.',
            'nombreEmpleado.max' => 'El nombre del empleado supera los 255 carácteres.',
            'rolEmpleado.required' => 'El rol del empleado es obligatorio.',
            'rolEmpleado.max' => 'El rol del empleado supera los 100 carácteres.',
            'generoEmpleado.required' => 'El genero del empleado es obligatorio.',
            'generoEmpleado.max' => 'El genero del empleado supera los 50 carácteres.',
            'telefonoEmpleado.required' => 'El teléfono del empleado es obligatorio.',
            'telefonoEmpleado.digits' => 'El teléfono debe ser de 10 digitos.',
            'telefonoEmpleado.numeric' => 'El teléfono solo acepta carácteres numéricos.',
            'curpEmpleado.required' => 'La CURP debe ser obligatoria.',
            'curpEmpleado.size' => 'El tamaño de la CURP debe ser de 18 carácteres.',
            'fecha_NacEmpleado.required' => 'La fecha del empleado es obligatoria.',
            'fecha_NacEmpleado.date' => 'La fecha del empleado debe ser un formato válido de fecha.',
        ];

        $this->validate($request, $rules, $messages);
        
        /* $request->validate([
            'nombreEmpleado' => 'required|string|max:255',
            'rolEmpleado' => 'required|string|max:100', 
            'generoEmpleado' => 'required|string|max:50',
            'telefonoEmpleado' => 'required|digits:10|numeric',
            'curpEmpleado' => 'required|string|size:18',
            'fecha_NacEmpleado' => 'required|date',
            'imagenEmpleado' => 'required',
        ]); */
        
        Empleado::where('id', $empleado->id)->update($request->except('_token', '_method'));
        
        $notification = 'El Empleado '. $updateName .' ha sido actualizado correctamente.';

        return redirect('/empleado')->with(compact('notification'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $notification = '';
        $count=0;
        $deleteName = $empleado->nombreEmpleado;

        // Contamos los registros en las relaciones
        $count+=count($empleado->citas);
        // Comprobamos si existen registros 
        if($count>0) {
            $notification =  'El Empleado '. $empleado->nombreEmpleado .' no puede ser eliminado, por favor, reasigna las citas a otro empleado.';
            
        } else {
            // si no hay registros eliminamos
            $empleado->delete();
            $notification = 'El Empleado '. $deleteName .' ha sido eliminado correctamente.';
        }


        return redirect('/empleado')->with(compact('notification'));
    }
}
