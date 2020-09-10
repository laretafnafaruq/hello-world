<?php

Namespace App\Http\Controllers;

Use App\Produt;
Use Illuminate\Http\Request;

Class ProdutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    Public function index()
    {
        //ini tampilan index
        Return view(‘product.index’);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    Public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    Public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    Public function show(Produt $produt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    Public function edit(Produt $produt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    Public function update(Request $request, Produt $produt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    Public function destroy(Produt $produt)
    {
        //
    }
}
