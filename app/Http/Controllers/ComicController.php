<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $val_data = $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|max:15',
            'series' => 'nullable|max:50',
            'type' => 'nullable|max:20',
            'sale_date' => 'nullable|max:25',
        ]);
        // dd($val_data);

        // $data = $request->all();

        $comic = new Comic();
        $comic->title = $val_data['title'];
        $comic->description = $val_data['description'];
        $comic->thumb = $val_data['thumb'];
        $comic->price = $val_data['price'];
        $comic->series = $val_data['series'];
        $comic->sale_date = $val_data['sale_date'];
        $comic->type = $val_data['type'];
        $comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $val_data = $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'nullable',
            'thumb' => 'required|max:255',
            'price' => 'required|max:15',
            'series' => 'nullable|max:50',
            'type' => 'nullable|max:20',
            'sale_date' => 'nullable|max:25',
        ]);

        $comic->update($val_data);

        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
