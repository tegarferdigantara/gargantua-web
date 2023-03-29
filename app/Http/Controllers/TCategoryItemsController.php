<?php

namespace App\Http\Controllers;

use App\Models\TCategoryItems;
use App\Http\Requests\StoreTCategoryItemsRequest;
use App\Http\Requests\UpdateTCategoryItemsRequest;

class TCategoryItemsController extends Controller
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
     * @param  \App\Http\Requests\StoreTCategoryItemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTCategoryItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TCategoryItems  $tCategoryItems
     * @return \Illuminate\Http\Response
     */
    public function show(TCategoryItems $tCategoryItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TCategoryItems  $tCategoryItems
     * @return \Illuminate\Http\Response
     */
    public function edit(TCategoryItems $tCategoryItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTCategoryItemsRequest  $request
     * @param  \App\Models\TCategoryItems  $tCategoryItems
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTCategoryItemsRequest $request, TCategoryItems $tCategoryItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TCategoryItems  $tCategoryItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(TCategoryItems $tCategoryItems)
    {
        //
    }
}
