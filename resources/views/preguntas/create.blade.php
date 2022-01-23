@extends('layouts.add')

@section('content')

<h2 class="text-center mb-5">Detalle de Examen</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form  method="POST" action="{{ route('preguntas.store') }}">
                @csrf
                <input type="hidden" name="id_examen" value="{{$id_examen}}">
                <input type="hidden" name="cantidad" value="{{$cantidad}}">
                @for ($i = 1; $i <= $cantidad; $i++)                                                  
                    <div class="form-group">
                        <label for="pregunta{{$i}}">Pregunta {{$i}}</label>

                        <input type="text" name="pregunta{{$i}}" class="form-control" id="pregunta{{$i}}" placeholder="Pregunta">
                    </div>
                    <div class="form-group">
                        <label for="respuesta{{$i}}a">Respuesta 1</label>

                        <input type="text" name="respuesta{{$i}}a" class="form-control" id="respuesta{{$i}}a" placeholder="Respuesta">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="hidden" name="correcta{{$i}}a" value="0">
                            <input class="form-check-input" type="checkbox" name="correcta{{$i}}a" value="1" id="flexCheckDefault{{$i}}">
                            <label class="form-check-label" for="flexCheckDefault{{$i}}a">
                                Es correcta?
                            </label>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="respuesta{{$i}}b">Respuesta 2</label>

                        <input type="text" name="respuesta{{$i}}b" class="form-control" id="respuesta{{$i}}b" placeholder="Respuesta">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="hidden" name="correcta{{$i}}b" value="0">
                            <input class="form-check-input" type="checkbox" name="correcta{{$i}}b" value="1" id="flexCheckDefault{{$i}}b">
                            <label class="form-check-label" for="flexCheckDefault{{$i}}a">
                                Es correcta?
                            </label>
                        </div>                       
                    </div>
                    <div class="form-group">
                        <label for="respuesta{{$i}}c">Respuesta 3</label>

                        <input type="text" name="respuesta{{$i}}c" class="form-control" id="respuesta{{$i}}c" placeholder="Respuesta">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="hidden" name="correcta{{$i}}c" value="0">
                            <input class="form-check-input" type="checkbox" name="correcta{{$i}}c" value="1" id="flexCheckDefault{{$i}}c">
                            <label class="form-check-label" for="flexCheckDefault{{$i}}c">
                              Es correcta?
                            </label>
                          </div>                       
                    </div>
                    <h1>_______________________________________________</h1>
                @endfor                      

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>

            </form>
        </div>
    </div>


   
</div>


@endsection