<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class nehnutelnost extends Model
{
    protected $fillable=['Typ', 'Rozloha', 'Pocet_miestnosti', 'Material', 'Nazov', 'Cena', 'Popis', 'Ulica', 'Mesto', 'PSC', 'Supisne_cislo'];
    protected $primaryKey = 'idInzerat';

    public function user(){
        return $this->belongsTo('App\User');
    }
}

