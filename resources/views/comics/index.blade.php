@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex justify-content-between align-items-center py-3">
            <h1>This is your ADMIN page for comics</h1>

            <a class="btn btn-primary" href="{{route('comics.create')}}">Add</a>
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
                            <td><a href="{{ route('comics.show', $comic) }}"><i
                                        class="fa-solid fa-eye"></i></a>/Delete/Update
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
