<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPicturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pictures $picture)
    {
        return view('dashboard.galleryes.pictures.index', [
            'picture' => $picture->where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galleryes.pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:pictures',
            'image' => 'image|file|max:10000',
        ]);

        if ($request->file('image')) {
            $validatData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatData['user_id'] = auth()->user()->id;

        Pictures::create($validatData);

        return redirect('/dashboard/galeri/pictures')->with('create', 'A New Picture has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pictures $picture)
    {
        return view('dashboard.galleryes.pictures.edit', [
            'picture' => $picture
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pictures $picture)
    {

        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:10000',
        ];

        if ($request->slug != $picture->slug) {
            $rules['slug'] = 'required|unique:pictures';
        }

        $validatData = $request->validate($rules);

        if ($request->file('image')) {
            if ($picture->image == null) {
                Storage::delete($picture->image);
            }

            $validatData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatData['user_id'] = auth()->user()->id;

        Pictures::where('id', $picture->id)->update($validatData);

        return redirect('/dashboard/galeri/pictures')->with('update', 'update successsfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pictures $picture)
    {
        if ($picture->image) {
            Storage::delete($picture->image);
        }

        Pictures::destroy($picture->id);

        return redirect('/dashboard/galeri/pictures')->with('delete', 'Picture Deleted !!!');
    }
}
