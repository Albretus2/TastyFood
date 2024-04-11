<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.post.index', [
            'posts' => News::where('user_id', auth()->user()->id)->latest()->get()               //orderBy('created_at', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:news',
            'cover' => 'image|file|max:5000',
            'body' => 'required'
        ]);

        if ($request->file('cover')) {
            $validatData['cover'] = $request->file('cover')->store('post-images');
        }

        $validatData['user_id'] = auth()->user()->id;
        $validatData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        News::create($validatData);

        return redirect('/dashboard/posts')->with('success', 'New Post has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $post)
    {
        return view('dashboard.post.show', [
            'posts' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $post)
    {
        return view('dashboard.post.edit', [
            'posts' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'cover' => 'image|file|max:5000',
            'body' => 'required'
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:news';
        }

        $validatData = $request->validate($rules);

        if ($request->file('cover')) {
            if ($post->cover != null) {
                Storage::delete($post->cover);
            }

            $validatData['cover'] = $request->file('cover')->store('post-images');
        }

        $validatData['user_id'] = auth()->user()->id;
        $validatData['excerpt'] = Str::limit(strip_tags($request->body), 70);

        News::where('id', $post->id)->update($validatData);

        return redirect('/dashboard/posts')->with('update', 'Your Post has been Update !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $post)
    {
        if ($post->cover) {
            Storage::delete($post->cover);
        }

        News::destroy($post->id);
        return redirect('/dashboard/posts')->with('delete', 'Post has been deleted');
    }
}
