<?php

namespace App\Http\Controllers;

use App\Papers;
use Illuminate\Http\Request;

class PapersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("papers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function show(Papers $papers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function edit(Papers $papers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Papers $papers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Papers  $papers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Papers $papers)
    {
        //
    }
}
