<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /**
        * @get('/admin/blog')
        * @name('admin.blog.index')
        * @middlewares('web', auth')
        */
        return view('pages.backend.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /**
        * @get('/admin/blog/create')
        * @name('admin.blog.create')
        * @middlewares('web', auth')
        */
        $blog = null;

        return view('pages.backend.blogs.cev', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
       /**
        * @post('/admin/blog')
        * @name('admin.blog.store')
        * @middlewares('web', auth')
        */
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
       /**
        * @get('/admin/blog/{blog}')
        * @name('admin.blog.show')
        * @middlewares('web', auth')
        */
        $blog = $blog->id;

        return view('pages.backend.blogs.cev', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
       /**
        * @get('/admin/blog/{blog}/edit')
        * @name('admin.blog.edit')
        * @middlewares('web', auth')
        */
        $blog = $blog->id;

        return view('pages.backend.blogs.cev', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
