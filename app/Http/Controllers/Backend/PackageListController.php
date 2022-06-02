<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageListRequest;
use App\Http\Requests\UpdatePackageListRequest;
use App\Models\PackageList;

class PackageListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * @get('/admin/package-list')
         * @name('admin.package-list.index')
         * @middlewares('web', auth')
         */
        return view('pages.backend.packageLists.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * @get('/admin/package-list/create')
         * @name('admin.package-list.create')
         * @middlewares('web', auth')
         */
        $packageList = null;

        return view('pages.backend.packageLists.cev', compact('packageList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePackageListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePackageListRequest $request)
    {
        /**
         * @post('/admin/package-list')
         * @name('admin.package-list.store')
         * @middlewares('web', auth')
         */
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function show(PackageList $packageList)
    {
        /**
         * @get('/admin/package-list/{package_list}')
         * @name('admin.package-list.show')
         * @middlewares('web', auth')
         */
        $packageList = $packageList->id;

        return view('pages.backend.packageLists.cev', compact('packageList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function edit(PackageList $packageList)
    {
        /**
         * @get('/admin/package-list/{package_list}/edit')
         * @name('admin.package-list.edit')
         * @middlewares('web', auth')
         */
        $packageList = $packageList->id;

        return view('pages.backend.packageLists.cev', compact('packageList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePackageListRequest  $request
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePackageListRequest $request, PackageList $packageList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PackageList  $packageList
     * @return \Illuminate\Http\Response
     */
    public function destroy(PackageList $packageList)
    {
        //
    }
}
