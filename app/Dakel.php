<?php

namespace App;
use App\Dagur;

use Illuminate\Database\Eloquent\Model;

class Dakel extends Model
{
    protected $table = "dakel";
    protected $fillable = [
        'id_dagur','kdkelas', 'namakls', 'walikls'
    ];
    public function dagur()
    {
    	return $this->belongsTo('App\Dagur', 'id_dagur', 'id');
    }
}
