<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

/**
 * Class BuscaController
 * @package App\Http\Controllers
 */
class BuscaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $texto = trim($request->get('texto'));
        if($texto == '' ){
            $datos=Dato::where('tzutujil','abcdefg')
            ->orwhere('spanish','abcdefg')
            ->orwhere('ingles','abcdefg')
            ->orderBy('tzutujil')->paginate(10);
        }else{
            $datos=Dato::where('tzutujil','LIKE','%'.$texto.'%')
            ->orwhere('spanish','LIKE','%'.$texto.'%')
            ->orwhere('ingles','LIKE','%'.$texto.'%')
            ->orderBy('tzutujil')->paginate(10);
        }

        return view('busca.index', compact('datos','texto'));
        //return $datos;
    }


}
