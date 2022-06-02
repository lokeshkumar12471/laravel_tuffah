<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInsuranceRequest;
use App\Http\Requests\UpdateInsuranceRequest;
use App\Models\Insurance;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.backend.insurances.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insurance = null;

        return view('pages.backend.insurances.cev', compact('insurance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInsuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsuranceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        $insurance = $insurance->id;

        return view('pages.backend.insurances.cev', compact('insurance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Insurance $insurance)
    {
        $insurance = $insurance->id;

        return view('pages.backend.insurances.cev', compact('insurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsuranceRequest  $request
     * @param  \App\Models\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsuranceRequest $request, Insurance $insurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insurance $insurance)
    {
        //
    }
}
