@extends('layouts.app')


@section('content')
    <div class="container">

        <h1>Update selected comic</h1>

        @include('partials.validation')


        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf

            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" value="{{ $comic->title }}" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="Batman" />
                <small id="titleHelper" class="form-text text-muted">Insert a title here</small>
            </div>

            <div>
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="8">{{ $comic->description }}</textarea>

            </div>

            <div class="d-flex">
                <img src="{{ $comic->thumb }}" alt="">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image URL</label>
                    <input type="text" class="form-control" value="{{ $comic->thumb }}" name="thumb" id="title"
                        aria-describedby="thumbHelper" placeholder="https://" />
                    <small id="thumbHelper" class="form-text text-muted">Insert an image url here</small>
                </div>
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" value="{{ $comic->price }}" name="price" id="price"
                    aria-describedby="priceHelper" placeholder="$5.99" />
                <small id="priceHelper" class="form-text text-muted">Insert a price here</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" value="{{ $comic->series }}" name="series" id="series"
                    aria-describedby="seriesHelper" placeholder="Batman Arkham Knight" />
                <small id="seriesHelper" class="form-text text-muted">Insert a series here</small>
            </div>


            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" value="{{ $comic->sale_date }}" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="1900-01-01" />
                <small id="sale_dateHelper" class="form-text text-muted">Insert the sale date here</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" value="{{ $comic->type }}" name="type" id="type"
                    aria-describedby="typeHelper" placeholder="Comic Book" />
                <small id="typeHelper" class="form-text text-muted">Insert the type here</small>
            </div>


            <button type="submit" class="btn btn-primary">
                Update
            </button>


        </form>

    </div>
@endsection
