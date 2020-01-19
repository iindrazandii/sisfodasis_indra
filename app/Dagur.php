<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dagur extends Model
{
    protected $table = "dagur";
    protected $fillable = [
        'nip', 'namaguru', 'tgllhr','temlhr','golongan','alamat','foto'
    ];

}
