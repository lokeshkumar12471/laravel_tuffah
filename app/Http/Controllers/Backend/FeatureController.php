<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use App\Models\Feature;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /**
        * @get('/admin/feature')
        * @name('admin.feature.index')
        * @middlewares('web', auth')
        */
        return view('pages.backend.features.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /**
        * @get('/admin/feature/create')
        * @name('admin.feature.create')
        * @middlewares('web', auth')
        */
        $feature = null;

        return view('pages.backend.features.cev', compact('feature'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFeatureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeatureRequest $request)
    {
       /**
        * @post('/admin/feature')
        * @name('admin.feature.store')
        * @middlewares('web', auth')
        */
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
       /**
        * @get('/admin/feature/{feature}')
        * @name('admin.feature.show')
        * @middlewares('web', auth')
        */
        $feature = $feature->id;

        return view('pages.backend.features.cev', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
       /**
        * @get('/admin/feature/{feature}/edit')
        * @name('admin.feature.edit')
        * @middlewares('web', auth')
        */
        $feature = $feature->id;

        return view('pages.backend.features.cev', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFeatureRequest  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        //
    }
}
