<?php

namespace App\Http\Controllers;

use App\Models\DonDatHang;
use App\Http\Requests\StoreDonDatHangRequest;
use App\Http\Requests\UpdateDonDatHangRequest;

class DonDatHangController extends Controller
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
     * @param  \App\Http\Requests\StoreDonDatHangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDonDatHangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DonDatHang  $donDatHang
     * @return \Illuminate\Http\Response
     */
    public function show(DonDatHang $donDatHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DonDatHang  $donDatHang
     * @return \Illuminate\Http\Response
     */
    public function edit(DonDatHang $donDatHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDonDatHangRequest  $request
     * @param  \App\Models\DonDatHang  $donDatHang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDonDatHangRequest $request, DonDatHang $donDatHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DonDatHang  $donDatHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(DonDatHang $donDatHang)
    {
        //
    }
}
