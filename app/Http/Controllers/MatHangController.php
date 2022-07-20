<?php

namespace App\Http\Controllers;

use App\Models\MatHang;
use App\Http\Requests\StoreMatHangRequest;
use App\Http\Requests\UpdateMatHangRequest;

class MatHangController extends Controller
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
     * @param  \App\Http\Requests\StoreMatHangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMatHangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MatHang  $matHang
     * @return \Illuminate\Http\Response
     */
    public function show(MatHang $matHang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MatHang  $matHang
     * @return \Illuminate\Http\Response
     */
    public function edit(MatHang $matHang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMatHangRequest  $request
     * @param  \App\Models\MatHang  $matHang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMatHangRequest $request, MatHang $matHang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MatHang  $matHang
     * @return \Illuminate\Http\Response
     */
    public function destroy(MatHang $matHang)
    {
        //
    }
}
