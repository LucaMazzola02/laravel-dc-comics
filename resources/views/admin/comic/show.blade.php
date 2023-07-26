@extends('layouts.app')

@section('title', 'Admin Single Comic')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>
                Comic title: {{ $comic->title }}
            </h1>
        </div>
    </div>
    <div class="row pokemons justify-content-center">
        <article class="card col-6 p-0 m-3">

            <img src="{{ $comic->thumb }}" class="card-img-top w-25" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $comic->title  }}
                </h5>
                <h6>
                    ID : {{ $comic->id }}
                </h6>
                <p class="card-text">
                    This comic costs: {{ $comic->price }}
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    {{ $comic->series  }}
                </li>
                <li class="list-group-item">
                    {{ $comic->sale_date  }}
                </li>
            </ul>
            <div class="text-center">
                <a class="btn btn-sm btn-success m-3"
                href="{{ route('admin.comics.edit', $comic->id) }}">
                    Edit
                </a>
                <form action="{{ route('admin.comics.destroy', $comic->id) }}" class="d-inline form-terminator" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-warning me-2">
                        Delete
                    </button>
                </form>
            </div>
        </article>
    </div>
</div>
@endsection