@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear un Nuevo Restaurante</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <p> {{ $error }} </p>
        @endforeach
        </ul>
    </div>

    {{ Form::open(['route' => 'restaurants.store', 'method' => 'post']) }}
    <div class="mb">
        {{ Form::label('name', 'Nombre', ['class' => 'form-label']) }}
        {{ Form::text('name', null, ['class' => 'form-control', 'maxlength' => 50]) }}
    </div>
    <div class="mb">
        {{ Form::label('description', 'Descripcion', ['class' => 'form-label']) }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => '4']) }}
    </div>
    <div class="mb">
        {{ Form::label('city', 'Ciudad', ['class' => 'form-label']) }}
        {{ Form::text('city', null, ['class' => 'form-control', 'maxlength' => 30]) }}
    </div>
    <div class="mb">
        {{ Form::label('phone', 'Telefono', ['class' => 'form-label']) }}
        {{ Form::text('phone', null, ['class' => 'form-control', 'maxlength' => 10]) }}
    </div>
    <div class="mb">
        {{ Form::label('delivery', 'Domicilio?', ['class' => 'form-label']) }}
        {{ Form::select('delivery', ['y' => 'Si', 'n' => 'No'], null, ['class' => 'form-control']); }}
    </div>
    <div class="mb mb-3">
        {{ Form::label('category_id', 'Categoria?', ['class' => 'form-label']) }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']); }}
    </div>

    @if(Auth::user()->type=='admin')
    {{ Form::submit('Crear', ['class' => 'btn btn-primary']); }}
    <a href=" {{ route('home')}}" class="btn btn-secondary">Cancelar</a>
    @endif
    {!! Form::close() !!}
</div>
@endsection