<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

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
        return view('citas.citaIndex', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citas.citaCreate');
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
        ]);

        Cita::create($request->all());

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
        return view('citas.citaEdit', compact('cita'));
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
        ]);

        Cita::where('id', $cita->id)->update($request->except('_token', '_method'));

        return redirect('/cita');
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
