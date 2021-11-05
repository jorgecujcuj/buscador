<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;
use App\Http\Requests\DatoCreateRequest;

/**
 * Class DatoController
 * @package App\Http\Controllers
 */
class DatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$datos = Dato::paginate();
        $texto = trim($request->get('texto'));
        $datos=Dato::where('tzutujil','LIKE','%'.$texto.'%')
        ->orwhere('spanish','LIKE','%'.$texto.'%')
        ->orwhere('ingles','LIKE','%'.$texto.'%')
        ->orderBy('tzutujil')
        ->paginate(10);

        return view('dato.index', compact('datos','texto'))
            ->with('i', (request()->input('page', 1) - 1) * $datos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dato = new Dato();
        return view('dato.create', compact('dato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DatoCreateRequest $request)
    {
        request()->validate(Dato::$rules);

        $dato = Dato::create($request->all());

        return redirect()->route('datos.index')
            ->with('success', 'Dato creado con éxito...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato = Dato::find($id);

        return view('dato.show', compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato = Dato::find($id);

        return view('dato.edit', compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dato $dato
     * @return \Illuminate\Http\Response
     */
    public function update(DatoCreateRequest $request, Dato $dato)
    {
        request()->validate(Dato::$rules);

        $dato->update($request->all());

        return redirect()->route('datos.index')
            ->with('success', 'Dato actualizado con éxito...');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dato = Dato::find($id)->delete();

        return redirect()->route('datos.index')
            ->with('success', 'Dato eliminado con éxito...');
    }
}
