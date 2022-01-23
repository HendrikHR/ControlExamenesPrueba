@extends('layouts.add')

@section('content')

    <div class="card">
        <h2 class="text-center mb-5">Listado de Examenes</h2>

        <h2 class="text-center mb-5">Admninistra tus recets</h2>

        <div  class="col-md-10 mx-auto bg-white p-3">

            <table class="table">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scole="col">ID</th>
                        <th scole="col">Nombre Examen</th>
                        <th scole="col">Cantidad Preguntas</th>
                        <th scole="col">URL</th>
                    </tr>
                </thead>

                <tbody>

    
                    @foreach ($examenes as $examen)
                        <tr>
                            <td>{{$examen->id}}</td>
                            <td>{{$examen->nombre}}</td>
                            <td>{{$examen->cantidad}}</td>                            
                            <td>{{$examen->url}}</td>
                        </tr>
                    @endforeach

                    
                </tbody>


            </table>


        </div>

        <a href="{{ route('examenes.create') }}" class="btn btn-primary">Agregar Examen</a>
    </div>
    
    

@endsection