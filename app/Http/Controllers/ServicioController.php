<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicio::all();

        return view('servicios/servicioIndex', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios/servicioCreate');
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
            'nombreServicio'=>'required|string|max:255',
            'descripcionServicio'=>'required|string|max:255',
            'duracionServicio'=>'required|string|max:200',
            'precioServicio'=>'required|numeric|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/',
        ]);

        Servicio::create($request->all());

        return redirect('/servicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        return view('servicios/servicioShow', compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        return view('servicios/servicioEdit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'nombreServicio'=>'required|string|max:255',
            'descripcionServicio'=>'required|string|max:255',
            'duracionServicio'=>'required|string|max:200',
            'precioServicio'=>'required|numeric|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/',
        ]);
        
        Servicio::where('id', $servicio->id)->update($request->except('_token', '_method'));

        return redirect('/servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect('/servicio');
    }
}
