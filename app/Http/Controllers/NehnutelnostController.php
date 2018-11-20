<?php

namespace App\Http\Controllers;

use App\nehnutelnost;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NehnutelnostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vlozit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        nehnutelnost::create(Request::all());
        return redirect()->action('NehnutelnostController@inzeraty');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nehnutelnost=nehnutelnost::find($id);
        return view ("upravit", ['nehnutelnost'=>$nehnutelnost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nehnutelnost = nehnutelnost::find($id);
        $nehnutelnost->update(Request::all());
        return redirect()->action('NehnutelnostController@inzeraty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function inzeraty()
    {
        $nehnutelnosti = nehnutelnost::all();
        return view ("inzeraty", ['nehnutelnosti' =>$nehnutelnosti]);
    }


}
