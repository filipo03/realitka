<?php
/**
 * Created by PhpStorm.
 * User: Luki
 * Date: 18. 12. 2018
 * Time: 18:40
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Obrazok extends Model
{
    protected $table = 'fotky';
    protected $fillabel = ['Nazov', 'Obrazok'];
    protected $primaryKey = 'idFotky';

    public function nehnutelnost(){
        return $this->belongsTo('App\nehnutelnost');
    }

}