@extends('layouts.app')

@section('content')
    <h2>Edita Pieza</h2>

    <div class = "row"> 
        <form action="/piezas/{{$dato->id}}" method="POST" class = "col s12"> 
        @csrf
            <input type="hidden" name="_method" value="put">

            <div class = "row">  
                <div class = "input-field col s6">  
                <input type="text" name="nombre" value="{{$dato->nombre}}">
                <label for="nombre">Nombre de la Pieza:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                <input type="text" name="descripcion" value="{{$dato->descripcion}}">
                <label for="descripcion">Descripcion de la Pieza:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                <input type="text" name="no_piezas" value="{{$dato->no_piezas}}">
                <label for="no_piezas">Numero de Piezas:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                <input type="text" name="costo_pieza" value="{{$dato->costo_pieza}}">
                <label for="costo_pieza">Costo por Pieza:</label>
                </div>  
            </div>  

            <div class="row">
                <button class="btn waves-effect waves-light amber" type="submit" name="action">Submit
                    <i class="material-icons right">cloud</i>
                </button>
            </div>
        </form>         
    </div>  
@endsection