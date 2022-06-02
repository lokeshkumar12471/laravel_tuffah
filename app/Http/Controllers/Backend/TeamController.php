<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /**
        * @get('/admin/team')
        * @name('admin.team.index')
        * @middlewares('web', auth')
        */
        return view('pages.backend.teams.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /**
        * @get('/admin/team/create')
        * @name('admin.team.create')
        * @middlewares('web', auth')
        */
        $team = null;

        return view('pages.backend.teams.cev', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
       /**
        * @post('/admin/team')
        * @name('admin.team.store')
        * @middlewares('web', auth')
        */
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
       /**
        * @get('/admin/team/{team}')
        * @name('admin.team.show')
        * @middlewares('web', auth')
        */
        $team = $team->id;

        return view('pages.backend.teams.cev', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
       /**
        * @get('/admin/team/{team}/edit')
        * @name('admin.team.edit')
        * @middlewares('web', auth')
        */
        $team = $team->id;

        return view('pages.backend.teams.cev', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
