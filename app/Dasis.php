<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dasis extends Model
{
    protected $table = "dasis";
    protected $fillable = [
        'nisn', 'nama', 'tgllhr','temlhr','kelas','alamat','foto'
    ];
}
