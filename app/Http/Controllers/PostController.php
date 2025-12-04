<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos = Auto::all();
        return view('home', ['autos' => $autos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autos = Auto::all();
        return view('home', ['autos' => $autos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $autos = Auto::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $autos = Auto::findOrFail($id);
        return view('home', ['autos' => $autos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $autos = Auto::findOrFail($id);
        return view('home', ['autos' => $autos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $autos = Auto::findOrFail($id);
        $autos->update($request->all());
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $autos = Auto::findOrFail($id);
        $autos->delete();
        return redirect()->route('home');
    }
}
