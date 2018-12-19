<?php
/**
 * Created by PhpStorm.
 * User: Luki
 * Date: 11. 12. 2018
 * Time: 11:49
 */

namespace App\Http\Controllers;
use App\User;
use App\nehnutelnost;
use Auth;
use Illuminate\Http\Request;

class PouzivatelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $pouzivatel=Auth::user()->id;
        return view('user/user' ,['pouzivatel'=>$pouzivatel]);
    }

    public function inzeraty_pouzivatel(){
        if(auth()->user()->user_type == "Admin"){
            $nehnutelnosti = nehnutelnost::all();
            return view ("inzerat/inzeraty", ['nehnutelnosti' =>$nehnutelnosti]);
        }

        $pouzivatel_id=Auth::user()->id;
        $pouzivatel = User::find($pouzivatel_id);
        return view('user/inzeraty_pouzivatel')->with('inzeraty', $pouzivatel->inzeraty);
    }

    public function pouzivatel_edit(){
        $pouzivatel_id=Auth::user()->id;
        $pouzivatel = User::find($pouzivatel_id);
        return view('user/pouzivatel_edit', ['pouzivatel'=>$pouzivatel]);
    }

    public function pouzivatel_update(Request $request){

        $this->validate($request, [

            'email' => 'required|email|max:255|unique:users'

        ]);

        $pouzivatel_id=Auth::user()->id;
        $pouzivatel = User::find($pouzivatel_id);
        $pouzivatel->name = $request->input('name');
        $pouzivatel->email = $request->input('email');
        $pouzivatel->Ulica = $request->input('Ulica');
        $pouzivatel->Mesto = $request->input('Mesto');
        $pouzivatel->PSC = $request->input('PSC');
        $pouzivatel->Supisne_cislo = $request->input('Supisne_cislo');
        $pouzivatel->Telefon = $request->input('Telefon');
        $pouzivatel->save();
        return redirect('user/user');

    }

}