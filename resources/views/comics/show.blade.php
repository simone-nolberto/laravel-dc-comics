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

                <div class="container my-5 d-flex justify-content-between">
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}"><i
                            class="fa-solid fa-pen"></i>EDIT</a>
                    <!-- Modal trigger button -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#modalId-{{ $comic->id }}">
                        DELETE
                    </button>

                    <!-- Modal Body -->
                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                    <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId-{{ $comic->id }}"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                        Attention! Are you sure you want to delete "{{ $comic->title }}" ?
                                    </h5>

                                </div>
                                <div class="modal-body">
                                    Attention! You're deleting this record, operation is irreversible!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

            </div>

        </div>
    </div>
@endsection
