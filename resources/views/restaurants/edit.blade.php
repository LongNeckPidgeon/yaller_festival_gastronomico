@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar un Restaurante</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
        </ul>
    @endif

        {{ Form::model($restaurant, ['route' => ['restaurants.update', $restaurant->id], 'method' => 'put']) }}

        @include('restaurants.form_fields')

        {{ Form::submit('Editar', ['class' => 'btn btn-primary']); }}
        <a href=" {{ URL::previous() }}" class="btn btn-secondary">Cancelar</a>

        {!! Form::close() !!}
</div>
@endsection