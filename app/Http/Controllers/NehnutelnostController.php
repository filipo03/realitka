<?php

namespace App\Http\Controllers;

use App\nehnutelnost;

//use Request;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class NehnutelnostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['show', 'inzeraty', 'home']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inzerat/vlozit');
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
        $nehnutelnost = new Nehnutelnost;
        $nehnutelnost->Nazov = $request->input('Nazov');
        $nehnutelnost->Cena = $request->input('Cena');
        $nehnutelnost->Popis = $request->input('Popis');
        $nehnutelnost->Typ = $request->input('Typ');
        $nehnutelnost->Rozloha = $request->input('Rozloha');
        $nehnutelnost->Pocet_miestnosti = $request->input('Pocet_miestnosti');
        $nehnutelnost->Material = $request->input('Material');
        $nehnutelnost->Ulica = $request->input('Ulica');
        $nehnutelnost->Mesto = $request->input('Mesto');
        $nehnutelnost->PSC = $request->input('PSC');
        $nehnutelnost->Supisne_cislo = $request->input('Supisne_cislo');
        $nehnutelnost->user_id = auth()->user()->id;
        $nehnutelnost->save();
        return redirect()->action('NehnutelnostController@inzeraty');


        /*nehnutelnost::create(Request::all());
        return redirect()->action('NehnutelnostController@inzeraty');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idInzerat)
    {
        $nehnutelnost=nehnutelnost::find($idInzerat);
        return view ("inzerat/zobrazit", ['nehnutelnost'=>$nehnutelnost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idInzerat)
    {
        $nehnutelnost=nehnutelnost::find($idInzerat);

        //Kontrola používateľa
        if(auth()->user()->id !== $nehnutelnost->user_id){
            return redirect ("inzerat/inzeraty");
        }

        return view ("inzerat/upravit", ['nehnutelnost'=>$nehnutelnost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idInzerat)
    {
        $nehnutelnost = nehnutelnost::find($idInzerat);
        $nehnutelnost->Nazov = $request->input('Nazov');
        $nehnutelnost->Cena = $request->input('Cena');
        $nehnutelnost->Popis = $request->input('Popis');
        $nehnutelnost->Typ = $request->input('Typ');
        $nehnutelnost->Rozloha = $request->input('Rozloha');
        $nehnutelnost->Pocet_miestnosti = $request->input('Pocet_miestnosti');
        $nehnutelnost->Material = $request->input('Material');
        $nehnutelnost->Ulica = $request->input('Ulica');
        $nehnutelnost->Mesto = $request->input('Mesto');
        $nehnutelnost->PSC = $request->input('PSC');
        $nehnutelnost->Supisne_cislo = $request->input('Supisne_cislo');
        $nehnutelnost->save();
        return redirect()->action('NehnutelnostController@inzeraty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idInzerat)
    {
        $nehnutelnost=nehnutelnost::find($idInzerat);

        //Kontrola používateľa
        if(auth()->user()->id !== $nehnutelnost->user_id){
            return redirect ("inzerat/inzeraty");
        }

        $nehnutelnost->delete();
        return redirect()->action('NehnutelnostController@inzeraty');
    }

    public function inzeraty()
    {
        $nehnutelnosti = nehnutelnost::all();
        return view ("inzerat/inzeraty", ['nehnutelnosti' =>$nehnutelnosti]);
    }

    public function home(){

/*if(Auth::guest()){
    echo 'Prosím prihláste sa';
}else{
    echo 'Vitajte ' . Auth::user()->name . '.';
}*/
        return view('home');
    }


}
