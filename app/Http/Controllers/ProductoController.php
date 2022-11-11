<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'marca' => 'required|max:255',
            'tipo' => 'required|max:255',
            'precio' => 'required',
            'cantidad' => 'required|integer',
        ]);

        Producto::create($request->all());

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

        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'marca' => 'required|max:255',
            'tipo' => 'required|max:255',
            'precio' => 'required',
            'cantidad' => 'required|integer',
        ]);
        
        Producto::where('id', $producto->id)->update($request->except('_token', '_method'));

        $notification = 'El Producto '. $updateName .' ha sido actualizado correctamente.';

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

        $notification = 'El Producto '. $deleteName .' ha sido eliminado correctamente.';
        
        return redirect('/producto')->with(compact('notification'));
    }
}
