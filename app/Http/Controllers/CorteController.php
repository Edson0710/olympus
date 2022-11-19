<?php

namespace App\Http\Controllers;

use App\Models\Corte;
use App\Models\CorteImage;
use Illuminate\Http\Request;

class CorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cortes = Corte::all();
        return view('cortes/corteIndex', compact('cortes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Se asignan en 'cortes' todas las instancias del modelo Corte y se mandan a la vista Create
        $cortes = Corte::all();

        return view('cortes/corteCreate', compact('cortes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notification = '';

        $rules = [
            'nombreCorte' => 'required|string',
            'estiloCorte' => 'required|string',
            'descripcionCorte' => 'required|string',
        ];

        $messages = [
            'nombreCorte.required' => 'El nombre del corte es obligatorio.',
            'estiloCorte.required' => 'El estilo del corte es obligatorio.',
            'descripcionCorte.required' => 'La descripcion del corte es obligatorio.',
        ];

        $this->validate($request, $rules, $messages);

        /* $request->validate([
            'nombreCorte' => 'required|string',
            'estiloCorte' => 'required|string',
            'descripcionCorte' => 'required|string',
        ]); */

        $corte = Corte::create($request->all());

        // Validación de imagenes //
        if ($request->file('imagen')->isValid()) {
            /** Se asigna en 'ubicacion' el path de la imagen que se almacena dentro de la carpeta local 'corteImagenes' */
            $ubicacion = $request->imagen->store('public');

            // Inicializamos un nuevo objeto CorteImage //
            $imagen = new CorteImage();
            // Le asignamos al atributo 'ubicacion' del modelo 'corteimage' su ubicacion de almacenamiento //
            $imagen->ubicacionFileCorte = $ubicacion;
            // Le asignamos al atributo 'nombreOriginal' del modelo 'corteimage' una función que ayuda a obtener el nombre original del cliente //
            $imagen->nombreOriginalCorte = $request->imagen->getClientOriginalName();
            // Le asignamos al atributo 'mime' del modelo 'corteimage' un valor por default //
            $imagen->mime = '';

            // Guardamos el objeto 'imagen' con la relación a nivel modelo //
            $corte->corteimages()->save($imagen);
        }

        $notification = 'El Corte ha sido creado correctamente';

        return redirect('/corte')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function show(Corte $corte)
    {
        $cortes = Corte::all();
        return view('cortes/corteShow', compact('corte', 'cortes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function edit(Corte $corte)
    {
        return view('cortes/corteEdit', compact('corte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corte $corte)
    {
        $updateName = $corte->nombreCorte;

        $rules = [
            'nombreCorte' => 'required|string',
            'estiloCorte' => 'required|string',
            'descripcionCorte' => 'required|string',
        ];

        $messages = [
            'nombreCorte.required' => 'El nombre del corte es obligatorio.',
            'estiloCorte.required' => 'El estilo del corte es obligatorio.',
            'descripcionCorte.required' => 'La descripcion del corte es obligatorio.',
        ];

        $this->validate($request, $rules, $messages);

        /* $request->validate([
            'nombreCorte' => 'required|string|max:100',
            'estiloCorte' => 'required|string|max:100',
            'descripcionCorte' => 'required|string',
        ]); */

        Corte::where('id', $corte->id)->update($request->except('_token', '_method'));

        $notification = 'El Corte '. $updateName .' ha sido actualizado correctamente.';

        return redirect('/corte')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corte $corte)
    {
        $notification = '';
        $deleteName = $corte->nombreCorte;

        $corte->delete();

        $notification = 'El Corte '. $deleteName .' ha sido eliminado correctamente.';

        return redirect('corte')->with(compact('notification'));
    }

    /** Esta es una función que sirve para pasar todas las instancias de Corte
     * a la vista 'cortes', que es la del usuario
     */

    public function corteUsuario() 
    {
        $cortes = Corte::all();
        return view('cortes', compact('cortes'));
    }
}
