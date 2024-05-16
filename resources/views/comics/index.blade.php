@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center py-3">
            <h1>This is your ADMIN page for comics</h1>

            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add</a>
        </div>


        {{-- @dd($comics) --}}

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        {{-- <th scope="col">Image</th> --}}
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($comics as $comic)
                        <tr class="">
                            <td>{{ $comic->title }}</td>
                            {{-- <td><img src="{{$comic->thumb}}" alt=""></td> --}}
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td class="d-flex gap-2">
                                <a class="btn btn-primary" href="{{ route('comics.show', $comic) }}"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}"><i
                                        class="fa-solid fa-pen"></i></a>

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $comic->id }}">
                                    DELETE
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
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

                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
