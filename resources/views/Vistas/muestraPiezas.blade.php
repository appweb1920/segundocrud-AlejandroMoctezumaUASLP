@extends('layouts.app')

@section('content')
    <h2>Muestra Piezas</h2>

    <button class = "btn waves-effect waves-teal amber z-depth-1">  
        <a href="/creaRecolector">Nuevo Recolector</a>
    </button></td>

    @if(!is_null($datos))
        @foreach ($datos as $d)  
            <div class = "row">  
                <div class = "col s10 m10 l10 light-green darken-3 white-text">  
                    <p>{{$d->nombre}}</p>
                    <p>[{{$d->no_piezas}} | ${{$d->costo_pieza}}]</p>
                    <p>{{$d->descripcion}}</p>
                    <br>
                    <button class = "btn waves-effect waves-teal amber z-depth-1">  
                        <a href="/piezas/{{$d->id}}">Edita</a>
                    </button></td>  
                    <form action="piezas/{{$dato->id}}" method="POST" class = "col s12"> 
                    @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button class = "btn waves-effect waves-teal amber z-depth-1" type="submit" name="action">
                            Submit
                        </button></td>  
                    </form>
                </div>  
            </div>  
        @endforeach
    @endif
@endsection