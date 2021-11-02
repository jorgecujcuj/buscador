<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

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
    public function index()
    {
        $datos = Dato::paginate();

        return view('dato.index', compact('datos'))
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
    public function store(Request $request)
    {
        request()->validate(Dato::$rules);

        $dato = Dato::create($request->all());

        return redirect()->route('datos.index')
            ->with('success', 'Dato created successfully.');
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
    public function update(Request $request, Dato $dato)
    {
        request()->validate(Dato::$rules);

        $dato->update($request->all());

        return redirect()->route('datos.index')
            ->with('success', 'Dato updated successfully');
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
            ->with('success', 'Dato deleted successfully');
    }
}
