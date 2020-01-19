<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dapel extends Model
{
    protected $table = "dapel";
    protected $fillable = [
        'kdmapel', 'namamapel', 'namaguru'
    ];
}
