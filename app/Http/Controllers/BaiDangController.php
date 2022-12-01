<?php

namespace App\Http\Controllers;

use App\Models\BaiDang;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBaiDangRequest;
use App\Http\Requests\UpdateBaiDangRequest;

class BaiDangController extends Controller
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
     * @param  \App\Http\Requests\StoreBaiDangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBaiDangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaiDang  $baiDang
     * @return \Illuminate\Http\Response
     */
    public function show(BaiDang $baiDang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaiDang  $baiDang
     * @return \Illuminate\Http\Response
     */
    public function edit(BaiDang $baiDang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBaiDangRequest  $request
     * @param  \App\Models\BaiDang  $baiDang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBaiDangRequest $request, BaiDang $baiDang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaiDang  $baiDang
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaiDang $baiDang)
    {
        //
    }
}
