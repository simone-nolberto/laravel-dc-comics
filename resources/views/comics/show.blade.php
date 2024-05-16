@extends('layouts.app')

@section('content')
    {{-- @dd($comic) --}}

    <h2>Questo è il fumetto che hai selezionato:</h2>

    <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <img class="card-img-top" src="{{ $comic->thumb }}" alt="image describing the following{{ $comic->title }}">
            </div>
            <div class="col">

                <div class="card">
                    <div class="card-body bg-white">
                        <h2 class="card-title"> {{ $comic->title }} </h2>
                        <p class="card-text">
                            {{ $comic->description }}
                        </p>
                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <span><strong>type:{{ $comic->type }} </strong></span>
                        <span><strong>price:{{ $comic->price }} </strong></span>
                        <span><strong>serie:{{ $comic->series }} </strong></span>
                    </div>
                </div>


                <div class="container my-5">
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}"><i class="fa-solid fa-pen"></i></a>
                    <a class="btn btn-danger" href="{{ route('comics.destroy', $comic) }}"><i
                            class="fa-solid fa-eraser"></i></a>
                </div>


            </div>

        </div>
    </div>
@endsection
