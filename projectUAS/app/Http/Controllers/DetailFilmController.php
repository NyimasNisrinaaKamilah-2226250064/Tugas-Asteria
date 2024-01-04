<?php

namespace App\Http\Controllers;

use App\Models\DetailFilm;
use App\Models\Film;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class DetailFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //eloquent
        $detailFilm = DetailFilm::all();
        return view('detailFilm.index')->with('detailFilm', $detailFilm);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailFilm $detailFilm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailFilm $detailFilm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailFilm $detailFilm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(DetailFilm $detailFilm)
     {
         //
     }
}
