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
        $rules = [
            'nombreServicio' => 'required|string|max:255',
            'descripcionServicio' => 'required|string|max:255',
            'precioServicio' => 'required|numeric|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/',
        ];

        $messages = [
            'nombreServicio.required' => 'El nombre del servicio es obligatorio.',
            'nombreServicio.max' => 'El nombre del servicio supera los 255 carácteres.',
            'descripcionServicio.required' => 'La descripcion del servicio es obligatoria.',
            'precioServicio.required' => 'El precio del servicio es obligatorio.',
            'precioServicio.numeric' => 'El precio del servicio solo acepta carácteres numéricos.',
            'precioServicio.regex' => 'El precio del servicio no tine un formato válido.',
        ];

        $this->validate($request, $rules, $messages);

        /* $request->validate([
            'nombreServicio'=>'required|string|max:255',
            'descripcionServicio'=>'required|string|max:255',
            'duracionServicio'=>'required|string|max:200',
            'precioServicio'=>'required|numeric|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/',
        ]); */

        Servicio::create($request->all());

        $notification = 'El Servicio ha sido creado correctamente.';

        return redirect('/servicio')->with(compact('notification'));
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
        $updateName = $servicio->nombreServicio;

        $rules = [
            'nombreServicio' => 'required|string|max:255',
            'descripcionServicio' => 'required|string|max:255',
            'precioServicio' => 'required|numeric|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/',
        ];

        $messages = [
            'nombreServicio.required' => 'El nombre del servicio es obligatorio.',
            'nombreServicio.max' => 'El nombre del servicio supera los 255 carácteres.',
            'descripcionServicio.required' => 'La descripcion del servicio es obligatoria.',
            'precioServicio.required' => 'El precio del servicio es obligatorio.',
            'precioServicio.numeric' => 'El precio del servicio solo acepta carácteres numéricos.',
            'precioServicio.regex' => 'El precio del servicio no tine un formato válido.',
        ];

        $this->validate($request, $rules, $messages);

        /* $request->validate([
            'nombreServicio'=>'required|string|max:255',
            'descripcionServicio'=>'required|string|max:255',
            'duracionServicio'=>'required|string|max:200',
            'precioServicio'=>'required|numeric|regex:/^[\d]{0,5}(\.[\d]{1,2})?$/',
        ]); */
        
        Servicio::where('id', $servicio->id)->update($request->except('_token', '_method'));

        $notification = 'El Servicio '. $updateName .' ha sido actualizado correctamente.';

        return redirect('/servicio')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        $notification = '';
        $count=0;
        $deleteName = $servicio->nombreServicio;

        // Contamos los registros en las relaciones
        $count+=count($servicio->citas);
        // Comprobamos si existen registros 
        if($count>0) {
            $notification =  'El Servicio '. $servicio->nombreServicio .' no puede ser eliminado, por favor, reasigna las citas a otro servicio.';
            
        } else {
            // si no hay registros eliminamos
            $servicio->delete();
            $notification = 'El Servicio '. $deleteName .' ha sido eliminado correctamente.';
        }

        return redirect('/servicio')->with(compact('notification'));
    }

    /** Esta es una función que sirve para pasar todas las instancias de Corte
     * a la vista 'cortes', que es la del usuario
     */

    public function servicioUsuario() 
    {
        $servicios = Servicio::all();
        return view('servicios', compact('servicios'));
    }
}
