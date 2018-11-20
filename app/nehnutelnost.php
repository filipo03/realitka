<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nehnutelnost extends Model
{
    protected $fillable=['Typ', 'Rozloha', 'Pocet_miestnosti', 'Material'];
}
