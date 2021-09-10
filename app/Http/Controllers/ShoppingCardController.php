<?php

namespace App\Http\Controllers;

use App\ShoppingCard;
use Illuminate\Http\Request;

class ShoppingCardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
    
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
     * @param  \App\ShoppingCard  $shoppingCard
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCard $shoppingCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShoppingCard  $shoppingCard
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCard $shoppingCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShoppingCard  $shoppingCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingCard $shoppingCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShoppingCard  $shoppingCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCard $shoppingCard)
    {
        //
    }
}
