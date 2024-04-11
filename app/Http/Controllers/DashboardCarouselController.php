<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.galleryes.carousel.index', [
            'carousels' => Carousel::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galleryes.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:carousels',
            'image' => 'image|file|max:20000',
        ]);

        if ($request->file('image')) {
            $validatData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatData['user_id'] = auth()->user()->id;

        Carousel::create($validatData);

        return redirect('/dashboard/galeri/carousel')->with('create', 'A New Carousel has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        return view('dashboard.galleryes.carousel.edit', [
            'carousel' => $carousel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:10000',
        ];

        if ($request->slug != $carousel->slug) {
            $rules['slug'] = 'required|unique:carousels';
        }

        $validatData = $request->validate($rules);

        if ($request->file('image')) {
            if ($carousel->image != null) {
                Storage::delete($carousel->image);
            }

            $validatData['image'] = $request->file('image')->store('gallery-images');
        }

        $validatData['user_id'] = auth()->user()->id;

        Carousel::where('id', $carousel->id)->update($validatData);

        return redirect('/dashboard/galeri/carousel')->with('update', 'update successsfull');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        if ($carousel->image) {
            Storage::delete($carousel->image);
        }

        Carousel::destroy($carousel->id);

        return redirect('/dashboard/galeri/carousel')->with('delete', 'Carousel Deleted !!!');
    }
}
