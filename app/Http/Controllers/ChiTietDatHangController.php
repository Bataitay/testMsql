<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDatHang;
use App\Http\Requests\StoreChiTietDatHangRequest;
use App\Http\Requests\UpdateChiTietDatHangRequest;
use App\Models\MatHang;
use App\Models\NhaCungCap;

class ChiTietDatHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doitacs = NhaCungCap::get();
        $cau2s = MatHang::get();

        $param = array(
           'doitacs' => $doitacs,
           'cau2s' => $cau2s,
        );
        return view('welcome', $param);
    }


}
