<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountRequest;
use App\Http\Requests\UpdateCountRequest;
use App\Models\Count;

class CountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.backend.counts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count = null;

        return view('pages.backend.counts.cev', compact('count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function show(Count $count)
    {
        $count = $count->id;

        return view('pages.backend.counts.cev', compact('count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function edit(Count $count)
    {
        $count = $count->id;

        return view('pages.backend.counts.cev', compact('count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountRequest  $request
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountRequest $request, Count $count)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Count  $count
     * @return \Illuminate\Http\Response
     */
    public function destroy(Count $count)
    {
        //
    }
}
