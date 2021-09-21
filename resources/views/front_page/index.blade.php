@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Nuestros restaurantes</h1>

    <?php
    $rows = $restaurants->count() / 4;
    ?>

    @for($i = 0; $i < $rows; $i++)

    <div class = "row">

        @for($j = 0; $j < 4; $j++)

            @if(isset($restaurants[($i * 4 +$j]))
                <?php
                    $restaurant = $restaurants[($i * 4 + $j];
                ?>

                <div class="col-3">
                    <div class = "card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">{{ $restaurant->name}}</h4>
                            <h5 class="text-muted"> {{ $restaurant->category->name }}</h5>
                            <p class="card-text"> {{ $restaurant->description }}</p>
                            <a href="#" class="btn btn-primary">Visitenos</a>
                        </div>
                    </div>
                </div>
            @endif

        @endfor

    </div>

    @endfor


    
</div>

@endsection