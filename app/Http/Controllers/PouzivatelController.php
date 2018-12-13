<?php
/**
 * Created by PhpStorm.
 * User: Luki
 * Date: 11. 12. 2018
 * Time: 11:49
 */

namespace App\Http\Controllers;
use App\User;
use Auth;

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
        $pouzivatel_id=Auth::user()->id;
        $pouzivatel = User::find($pouzivatel_id);
        return view('user/inzeraty_pouzivatel')->with('inzeraty', $pouzivatel->inzeraty);
    }

}