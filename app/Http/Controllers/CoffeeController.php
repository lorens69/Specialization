<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Coffee::all();
    }
    public function hello()
    {
        return "HELLO USER!";
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
        return Coffee::create([
            'coffee'=> $request->coffee,
            'description'=> $request->description,
            'normal_price'=> $request->normal_price,
            'regular_price'=>$request->regular_price,
            'vip_price'=>$request->vip_price,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Coffee::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function edit(Coffee $coffee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return Coffee::find($id)->update([
            'coffee'=> $request->coffee,
            'description'=> $request->description,
            'normal_price'=>$request->normal_price,
            'regular_price'=>$request->regular_price,
            'vip_price'=>$request->vip_price
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Coffee::find($id)->delete();
    }
}
