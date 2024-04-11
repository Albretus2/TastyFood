<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class DashboardAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(About $about)
    {
        return view('dashboard.abouts.index', [
            'about' => $about->all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('dashboard.abouts.edit', [
            'about' => $about

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $validatData = $request->validate([
            'slug' => 'required',
            'visi' => 'required',
            'misi' => 'required'
        ]);

        About::where('id', $about->id)->update($validatData);

        return redirect('/dashboard/abouts')->with('update', 'update successsfull');
    }
}
