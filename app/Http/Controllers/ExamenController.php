<?php

namespace App\Http\Controllers;

use App\Examen;
use App\Pregunta;
use App\Respuesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $examenes = Examen::all();

        return view('examenes.index',compact('examenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('examenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $examen = Examen::create($data);

        $cantidad = $examen['cantidad'];
        $id = $examen['id'];

        return redirect()->route('preguntas.create')->with(['id'=>$id],['cantidad'=>$cantidad]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        //
        
   
        //$data = Examen::where('id',$examen['id'])
        $examenes = Examen::find($examen['id']);
       // dd($examenes);
        $preguntas = Pregunta::where('examen_id','=', $examen['id'])
                                ->get();

        $resultados = DB::table('preguntas')
                        ->where('preguntas.examen_id','=',$examen['id'])
                        ->leftjoin('respuestas','preguntas.id','=','respuestas.pregunta_id')
                        ->select('preguntas.*','respuestas.*')
                        ->get();

     
        return view('examenes.show',compact('examenes','preguntas','resultados'));
        /*$data = DB::table('examens')
                    ->where('examens.id','=',$examen['id'])
                    ->leftjoin('preguntas','examens.id','=','preguntas.examen_id')
                    ->leftjoin('respuestas','preguntas.id','=','respuestas.pregunta_id')
                    ->select('examens.*','preguntas.*','respuestas.*')
                    ->get();*/

      //  dd($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit(Examen $examen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        //
    }
}
