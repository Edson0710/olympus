<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\ProductoImage;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto/productoIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto/productoCreate');
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
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'marca' => 'required|max:255',
            'tipo' => 'required|max:255',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
        ];

        $messages = [
            'nombre.required' => 'El nombre del producto es obligatorio.',
            'nombre.max' => 'El nombre del producto supera los 255 carácteres.',
            'descripcion.required' => 'La descripción del producto es obligatoria.',
            'descripcion.max' => 'La descripción del producto supera los 255 carácteres.',
            'marca.required' => 'La marca del producto es obligatoria.',
            'marca.max' => 'La marca del producto supera los 255 carácteres.',
            'tipo.required' => 'El tipo del producto es obligatoria.',
            'tipo.max' => 'El tipo del producto supera los 255 carácteres.',
            'precio.required' => 'El precio del producto es obligatorio.',
            'precio.numeric' => 'El precio del producto solo acepta carácteres numéricos.',
            'cantidad.required' => 'La cantidad del producto es obligatoria.',
            'cantidad.integer' => 'La cantidad del producto solo acepta números enteros.',
        ];

        $this->validate($request, $rules, $messages);

        /*  $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'marca' => 'required|max:255',
            'tipo' => 'required|max:255',
            'precio' => 'required',
            'cantidad' => 'required|integer',
        ]); */

        $producto = Producto::create($request->all());

        // Validación de imagenes //
        if ($request->file('imagen')->isValid()) {
            /** Se asigna en 'ubicacion' el path de la imagen que se almacena dentro de la carpeta local 'productoImagenes' */
            $ubicacion = $request->imagen->store('public');

            // Inicializamos un nuevo objeto ProductoImage //
            $imagen = new ProductoImage();
            // Le asignamos al atributo 'ubicacion' del modelo 'productoImage' su ubicacion de almacenamiento //
            $imagen->ubicacionFileProducto = $ubicacion;
            // Le asignamos al atributo 'nombreOriginal' del modelo 'productoImage' una función que ayuda a obtener el nombre original del producto //
            $imagen->nombreOriginalProducto = $request->imagen->getClientOriginalName();
            // Le asignamos al atributo 'mime' del modelo 'productoimage' un valor por default //
            $imagen->mime = '';

            // Guardamos el objeto 'imagen' con la relación a nivel modelo //
            $producto->productoimages()->save($imagen);
        }

        $notification = 'El Producto ha sido creado correctamente';

        return redirect('/producto')->with(compact('notification'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('producto/productoShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('producto/productoEdit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $updateName = $producto->nombre;

        $rules = [
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'marca' => 'required|max:255',
            'tipo' => 'required|max:255',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
        ];

        $messages = [
            'nombre.required' => 'El nombre del producto es obligatorio.',
            'nombre.max' => 'El nombre del producto supera los 255 carácteres.',
            'descripcion.required' => 'La descripción del producto es obligatoria.',
            'descripcion.max' => 'La descripción del producto supera los 255 carácteres.',
            'marca.required' => 'La marca del producto es obligatoria.',
            'marca.max' => 'La marca del producto supera los 255 carácteres.',
            'tipo.required' => 'El tipo del producto es obligatoria.',
            'tipo.max' => 'El tipo del producto supera los 255 carácteres.',
            'precio.required' => 'El precio del producto es obligatorio.',
            'precio.max' => 'El precio del producto solo acepta carácteres numéricos.',
            'cantidad.required' => 'La cantidad del producto es obligatoria.',
            'cantidad.integer' => 'La cantidad del producto solo acepta números enteros.',
        ];

        $this->validate($request, $rules, $messages);

        /* $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'marca' => 'required|max:255',
            'tipo' => 'required|max:255',
            'precio' => 'required',
            'cantidad' => 'required|integer',
        ]); */

        Producto::where('id', $producto->id)->update($request->except('_token', '_method'));

        $notification = 'El Producto ' . $updateName . ' ha sido actualizado correctamente.';

        return redirect('/producto')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $notification = '';
        $deleteName = $producto->nombre;

        $producto->delete();

        $notification = 'El Producto ' . $deleteName . ' ha sido eliminado correctamente.';

        return redirect('/producto')->with(compact('notification'), [
            'delete' => 'El Producto '. $deleteName .' ha sido eliminado correctamente.'
        ]);
    }

    /** Esta es una función que sirve para pasar todas las instancias de Producto
     * a la vista 'productos', que es la del usuario
     */

    public function productoUsuario() 
    {
        $productos = Producto::all();
        return view('listas.productos', compact('productos'));
    }
}
