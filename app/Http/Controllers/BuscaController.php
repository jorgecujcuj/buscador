<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;
use App\Models\Comentario;

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
        $message='';
        $cont=0;
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
            foreach($datos as $dato){
                if($dato->id >= 0 ){
                    $cont++;
                }
            }
            if($cont == 0){
                $message = "La palabra ".$texto." no se a encontrado."; 
            }elseif($cont > 0){
                $message = "Palabra ".$texto." encontrada.";
            }
            
        }

        return view('busca.index', compact('datos','texto','message'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comentario = new Comentario();

        return view('busca.create', compact('comentario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Comentario::$rules);

        $comentario = Comentario::create($request->all());

        $mensaje = "Comentario enviado con éxito";

        return redirect()->route('buscas.index')
        ->with('success', $mensaje);
    }


}
