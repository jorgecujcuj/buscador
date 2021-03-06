<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Http\Requests\crearContactoCreateRequest;


/**
 * Class CreaContactoController
 * @package App\Http\Controllers
 */
class CreaContactoController extends Controller
{
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacto = new Contacto();
        
        return view('crearContacto.create', compact('contacto'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\crearContactoCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(crearContactoCreateRequest $request)
    {
        request()->validate(Contacto::$rules);

        $contacto = Contacto::create($request->all());
        
        $mensaje = "Mensaje enviado con éxito!";

        return redirect()->route('crearContactos.create')
            ->with('success', $mensaje);
    }

 
}
