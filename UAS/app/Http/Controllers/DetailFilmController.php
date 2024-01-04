<?php

namespace App\Http\Controllers;

use App\Models\detailFilm;
use Illuminate\Http\Request;

class DetailFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail = detailFilm::all();
        return view("detail.index")->with("detail",$detail);
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
    public function show(detailFilm $detailFilm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailFilm $detailFilm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, detailFilm $detailFilm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailFilm $detailFilm)
    {
        //
    }
}
