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
    @include('restaurants.form_fields');

    @if(Auth::user()->type=='admin')
    {{ Form::submit('Crear', ['class' => 'btn btn-primary']); }}
    <a href=" {{ route('home')}}" class="btn btn-secondary">Cancelar</a>
    @endif
    {!! Form::close() !!}
</div>
@endsection