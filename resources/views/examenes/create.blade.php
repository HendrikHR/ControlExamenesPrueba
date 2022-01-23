@extends('layouts.add')

@section('content')

<div class="card">
    <h2 class="text-center mb-5">Agregar de Examen</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="{{ route('examenes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre Examen</label>

                    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Examen">
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad de Preguntas:</label>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cantidad" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="cant1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cantidad" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="cant2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cantidad" id="inlineRadio3" value="3" >
                        <label class="form-check-label" for="cant3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cantidad" id="inlineRadio3" value="4" >
                        <label class="form-check-label" for="cant3">4</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="cantidad" id="inlineRadio3" value="5" >
                        <label class="form-check-label" for="cant3">5</label>
                    </div>
                    
                </div>
                <div class="form-group">
                    <input type="hidden" name="url" class="form-control" id="url" value=".">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                </div>

            </form>
        </div>
    </div>


   
</div>



@endsection