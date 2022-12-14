<?php

namespace App\Http\Controllers;

use App\Models\Corte;
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
        $request->validate([
            'nombreCorte' => 'required|string',
            'estiloCorte' => 'required|string',
            'descripcionCorte' => 'required|string',
        ]);

        $corte = Corte::create($request->all());

        return redirect('/corte');
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
        $request->validate([
            'nombreCorte' => 'required|string|max:100',
            'estiloCorte' => 'required|string|max:100',
            'descripcionCorte' => 'required|string',
        ]);

        Corte::where('id', $corte->id)->update($request->except('_token', '_method'));

        return redirect('/corte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Corte  $corte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corte $corte)
    {
        $corte->delete();

        return redirect('corte');
    }
}
