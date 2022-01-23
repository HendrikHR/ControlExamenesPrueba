<?php

namespace App\Http\Controllers;
use App\Examen;

use Illuminate\Http\Request;
use App\Pregunta;
use App\Respuesta;


class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $id_examen = session()->get('id');

        $dataExamen = Examen::find($id_examen);

        $cantidad = $dataExamen['cantidad'];

        return view('preguntas.create',compact('id_examen','cantidad'));
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

       // dd($request->all());
      //  dd($request->all());
        $id_examen = $request->id_examen;
        $cantidad = $request->cantidad;
        

      //  $pregunta = $request->$res;

      //  dd($pregunta);

       for($i = 1; $i <= $cantidad; $i++){
            $id = $i;
            $varA = 'a';
            $varB = 'b';
            $varC = 'c';
            $resA = 'respuesta'.$id.$varA;
            $resB = 'respuesta'.$id.$varB;
            $resC = 'respuesta'.$id.$varC;
            $corrA = 'correcta'.$id.$varA;
            $corrB = 'correcta'.$id.$varB;
            $corrC = 'correcta'.$id.$varC;
            $preg = 'pregunta'.$i;
        
            $preguntas = Pregunta::create([
                'pregunta'=>$request->$preg,
                'examen_id'=>$id_examen                
            ]);


            $respuestaA = Respuesta::create([
                'respuesta'=>$request->$resA,
                'valorcorrecto'=>$request->$corrA,
                'pregunta_id'=>$preguntas['id']
            ]);

            $respuestaB = Respuesta::create([
                'respuesta'=>$request->$resB,
                'valorcorrecto'=>$request->$corrB,
                'pregunta_id'=>$preguntas['id']
            ]);

            $respuestaC = Respuesta::create([
                'respuesta'=>$request->$resC,
                'valorcorrecto'=>$request->$corrC,
                'pregunta_id'=>$preguntas['id']
            ]); 

        }

        $corrUrl = 'http://127.0.0.1:8000/examenes/';
        if($id_examen < 10){
            $corrUrl = $corrUrl.'0000'.$id_examen;
        }else if($id_examen<100){
            $corrUrl = $corrUrl.'000'.$id_examen;
        }

        Examen::where('id',$id_examen)    
                ->update(['url'=>$corrUrl]);

        
        return redirect()->route('examenes.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
