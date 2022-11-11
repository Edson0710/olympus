<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Servicio;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::all();
        $empleados = Empleado::all();
        $servicios = Servicio::all();

        return view('citas.citaIndex', compact('citas', 'empleados', 'servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se asignan en 'empleados' todas las instancias del modelo Empleado y se mandan a la vista Create
        $empleados = Empleado::all();

        //Se asignan en 'servicios' todas las instancias del modelo Servicio y se mandan a la vista Create
        $servicios = Servicio::all();
        
        return view('citas.citaCreate', compact('empleados', 'servicios'));
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
            'nombreUsuarioCita' => 'required | max:255',
            'emailUsuarioCita' => 'required | max:255 | email',
            /* 'confirmacionUsuarioCita' => 'required | max:255', */
            'fechaUsuarioCita' => 'required | date',
            /* 'calificacionUsuarioCita' => 'required | max:10 | min:0', */
            'celularUsuarioCita' => 'required | digits:10 | numeric',
            'horaUsuarioCita' => 'required',
            'empleado_id' => 'required|exists:empleados,id',
        ]);

        $cita = Cita::create($request->all());

        /*Entramos a la instancia "cita" en su método "servicios"
        para tener acceso a vincular a la cita con los servicios */
        $cita->servicios()->attach($request->servicios_id);

        return redirect('/cita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        return view('citas.citaShow', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //Se asignan en 'empleados' todas las instancias del modelo Empleado y se mandan a la vista Edit
        $empleados = Empleado::all();

        //Se asignan en 'servicios' todas las instancias del modelo Servicio y se mandan a la vista Edit
        $servicios = Servicio::all();

        return view('citas.citaEdit', compact('cita', 'empleados', 'servicios'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'nombreUsuarioCita' => 'required | max:255',
            'emailUsuarioCita' => 'required | max:255 | email',
            /* 'confirmacionUsuarioCita' => 'required | max:255', */
            'fechaUsuarioCita' => 'required | date',
            /* 'calificacionUsuarioCita' => 'required | max:10 | min:0', */
            'celularUsuarioCita' => 'required | digits:10 | numeric',
            'horaUsuarioCita' => 'required',
            'empleado_id' => 'required|exists:empleados,id',
        ]);

        /* Actualiza la información de la tabla de la cita, exceptuando las columnas 'token', 'method' y 'servicios_id'
            Trabaja sobre la tabla Empleado */
        Cita::where('id', $cita->id)->update($request->except('_token', '_method', 'servicios_id'));

        /* Sincroniza la información que el usuario selecciona con respecto a lo que existe dentro de la base de datos
            Trabaja sobre la tabla Pivote */
        $cita->servicios()->sync($request->servicios_id);

        //Redirecciona a la vista show
        return redirect()->route('cita.show', $cita->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();

        return redirect('/cita');
    }
}
