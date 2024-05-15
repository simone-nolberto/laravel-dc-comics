@extends('layouts.app')


@section('content')
    <div class="container">

        <h1>Add a new record for your comic</h1>


        <form action="{{ route('comics.store') }}" method="post">
            @csrf


            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Batman" />
                <small id="titleHelper" class="form-text text-muted">Insert a title here</small>
            </div>

            <div>
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="8"></textarea>

            </div>


            <div class="mb-3">
                <label for="src" class="form-label">Image URL</label>
                <input type="text" class="form-control" name="src" id="title" aria-describedby="srcHelper"
                    placeholder="https://" />
                <small id="srcHelper" class="form-text text-muted">Insert an image url here</small>
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="5.99" />
                <small id="priceHelper" class="form-text text-muted">Insert a price here</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Batman Arkham Knight" />
                <small id="seriesHelper" class="form-text text-muted">Insert a series here</small>
            </div>


            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateHelper"
                    placeholder="1900-01-01" />
                <small id="sale_dateHelper" class="form-text text-muted">Insert the sale date here</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="Comic Book" />
                <small id="typeHelper" class="form-text text-muted">Insert the type here</small>
            </div>


            <button type="submit" class="btn btn-primary">
                Create
            </button>


        </form>

    </div>
@endsection
