@extends('layouts.app')

@section('content')

<div class="container">

    <h3>
        <small class="muted-text">Restaurante</small>
        {{ $restaurant->name }}
    </h3>

    Servimos en {{ $restaurant->city }} en el horario de {{ $restaurant->shedule ??"Sin agenda definida" }}.<br>

    @if ($restaurant->delivery == 'y')
        Tenemos domicilios al numero {{ $restaurant->phone }}.<br>
    @else
        Contactenos para mas informacion al numero {{ $restaurant->phone }}.<br>
    @endif

    <a class="btn btn-warning mt-3" href=" {{ route('restaurants.edit', $restaurant->id )}}">Editar</a>

    {{ Form::open(['route' => [
            'restaurants.destroy', $restaurant->id],
            'method'=> 'delete'
            'onsubmit' => ' return confirm(\'Esta seguro que desea remover el restaurante?\nEsta accion no se puede deshacer\')'
            ]) }}
        <button type="submit" class="btn btn-danger mt-3" }}>Remover</button>
    {!! Form::close() !!}
</div>

@endsection