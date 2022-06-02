<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /**
        * @get('/admin/about')
        * @name('admin.about.index')
        * @middlewares('web', auth')
        */
        return view('pages.backend.about.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /**
        * @get('/admin/about/create')
        * @name('admin.about.create')
        * @middlewares('web', auth')
        */
        $about = null;

        return view('pages.backend.about.cev', compact('about'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutRequest $request)
    {
       /**
        * @post('/admin/about')
        * @name('admin.about.store')
        * @middlewares('web', auth')
        */
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
       /**
        * @get('/admin/about/{about}')
        * @name('admin.about.show')
        * @middlewares('web', auth')
        */
        $about = $about->id;

        return view('pages.backend.about.cev', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
       /**
        * @get('/admin/about/{about}/edit')
        * @name('admin.about.edit')
        * @middlewares('web', auth')
        */
        $about = $about->id;

        return view('pages.backend.about.cev', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
