<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\EmpleadoImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $empleado = Empleado::create($request->all());

        // Validación de imagenes //
        if ($request->file('imagen')->isValid()) {
            /** Se asigna en 'ubicacion' el path de la imagen que se almacena dentro de la carpeta local 'empleadoImagenes' */
            $ubicacion = $request->imagen->store('public');

            // Inicializamos un nuevo objeto EmpleadoImage //
            $imagen = new EmpleadoImage();
            // Le asignamos al atributo 'ubicacion' del modelo 'empleadoimage' su ubicacion de almacenamiento //
            $imagen->ubicacionFileEmpleado = $ubicacion;
            // Le asignamos al atributo 'nombreOriginal' del modelo 'empleadoimage' una función que ayuda a obtener el nombre original del empleado //
            $imagen->nombreOriginalEmpleado = $request->imagen->getClientOriginalName();
            // Le asignamos al atributo 'mime' del modelo 'empleadoimage' un valor por default //
            $imagen->mime = '';

            // Guardamos el objeto 'imagen' con la relación a nivel modelo //
            $empleado->empleadoimages()->save($imagen);
        }

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
        $count2=0;
        $deleteName = $empleado->nombreEmpleado;

        // Contamos los registros en las relaciones
        $count+=count($empleado->citas);
        // Comprobamos si existen registros 
        if($count>0) {
            $notification =  'El Empleado '. $empleado->nombreEmpleado .' no puede ser eliminado, por favor, reasigna las citas a otro empleado.';

        } else {
            //Eliminar Imagenes relacionadas con empleado
            foreach($empleado->empleadoimages as $image){
                $count2++;
                $file = EmpleadoImage::whereId($image->id)->firstOrFail();
            }
            if($count2 > 0){
                unlink(public_path(Storage::url($file->ubicacionFileEmpleado)));
            }
            
            // si no hay registros eliminamos
            $empleado->delete();
            $notification = 'El Empleado '. $deleteName .' ha sido eliminado correctamente.';
        }


        return redirect('/empleado')->with(compact('notification'));
    }

    /** Esta es una función que sirve para pasar todas las instancias de Empleado
     * a la vista 'barberos', que es la del usuario
     */

    public function empleadoUsuario() 
    {
        $empleados = Empleado::all();
        return view('listas.barberos', compact('empleados'));
    }
}
