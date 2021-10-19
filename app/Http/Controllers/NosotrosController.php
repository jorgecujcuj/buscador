<?php

namespace App\Http\Controllers;

//use App\Models\Ruta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class RutaController
 * @package App\Http\Controllers
 */
class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('nosotro.index');
    }

    
}
