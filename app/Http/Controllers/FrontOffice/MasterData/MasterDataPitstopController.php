<?php

namespace App\Http\Controllers\FrontOffice\Masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\FrontOffice\MasterDataPitstop;

class MasterDataPitstopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pitstop = MasterDataPitstop::get();

        return view('pages.frontoffice.masterdata.pitstop.main', compact('pitstop'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MasterDataPitstop  $masterDataPitstop
     * @return \Illuminate\Http\Response
     */
    public function show(MasterDataPitstop $masterDataPitstop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasterDataPitstop  $masterDataPitstop
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterDataPitstop $masterDataPitstop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasterDataPitstop  $masterDataPitstop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterDataPitstop $masterDataPitstop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasterDataPitstop  $masterDataPitstop
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterDataPitstop $masterDataPitstop)
    {
        //
    }
}
