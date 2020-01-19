<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danilai extends Model
{
    protected $table = "danilai";
    protected $fillable = [
        'kdmapel', 'nisn', 'nilai'
    ];
}
