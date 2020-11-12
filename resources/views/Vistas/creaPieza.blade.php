@extends('layouts.app')

@section('content')
    <h2>Crear Pieza</h2>

    <div class = "row"> 
        <form action="/piezas" method="POST" class = "col s12"> 
        @csrf
            <div class = "row">  
                <div class = "input-field col s6">  
                <input placeholder = "Herramienta" type="text" name="nombre">
                <label for="nombre">Nombre de la Pieza:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                <input placeholder = "Hace algo" type="text" name="descripcion">
                <label for="descripcion">Descripcion de la Pieza:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                <input placeholder = "5" type="text" name="no_piezas">
                <label for="no_piezas">Numero de Piezas:</label>
                </div>  
            </div>  

            <div class = "row">  
                <div class = "input-field col s6">  
                <input placeholder = "10.00" type="text" name="costo_pieza">
                <label for="costo_pieza">Costo por Pieza:</label>
                </div>  
            </div>  

            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">cloud</i>
                </button>
            </div>
        </form>         
    </div>  
@endsection