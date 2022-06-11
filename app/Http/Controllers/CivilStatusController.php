<?php

namespace App\Http\Controllers;

use App\Models\CivilStatus;
use App\Http\Requests\StoreCivilStatusRequest;
use App\Http\Requests\UpdateCivilStatusRequest;

class CivilStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCivilStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCivilStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CivilStatus  $civilStatus
     * @return \Illuminate\Http\Response
     */
    public function show(CivilStatus $civilStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CivilStatus  $civilStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(CivilStatus $civilStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCivilStatusRequest  $request
     * @param  \App\Models\CivilStatus  $civilStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCivilStatusRequest $request, CivilStatus $civilStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CivilStatus  $civilStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(CivilStatus $civilStatus)
    {
        //
    }
}
