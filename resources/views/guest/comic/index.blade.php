@extends('layouts.app')

@section('title', 'Comics List')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center m-5">
            <h1>
                Comics list
            </h1>
        </div>
    </div>
    <div class="row pokemons justify-content-around">
        @foreach ($comicsList as $comic)
            <article class="card col-3 p-0 m-3" style="width: 18rem">
                <img src="{{ $comic->thumb }}" class="card-img-top"  alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $comic->title  }}
                    </h5>
                    <p class="card-text">
                        {{ $comic->sale_date }}
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        {{ $comic->series  }}
                    </li>
                    <li class="list-group-item">
                        {{ $comic->price  }}
                    </li>
                </ul>
            </article>
        @endforeach
    </div>
</div>
@endsection