@extends('layouts.app')

@section('title', 'Admin Comics List Panel')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="my-4">
                Admin Comic Panel
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped table-hover text-center table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comicsList as $comic)
                        <tr>
                            <th scope="row">
                                {{ $comic->title }}
                            </th>
                            <td>
                                {{ $comic->price  }}
                            </td>
                            <td>
                                {{ $comic->series  }}
                            </td>
                            <td>
                                {{ $comic->sale_date  }}
                            </td>
                            <td>
                                {{ $comic->type  }}
                            </td>                       
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection