@extends('layouts.add')

@section('content')

    
        <h2 class="text-center mb-5">{{$examenes->nombre}}</h2>

    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">

            @foreach ($preguntas as $pregunta)
                <div class="form-group">
                    <h3>{{$pregunta->pregunta}}</h3>
                </div>
                
                @foreach ($resultados as $resultado)

                    @if ($pregunta->id === $resultado->pregunta_id)
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                {{$resultado->respuesta}}
                            </label>
                        </div>
                    @endif                   
                    
                @endforeach
                <br>            


            @endforeach
            
        </div>
    </div>
    


@endsection