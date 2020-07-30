<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinions extends Model
{
    public $table = "opinions";
    public $timestamps = false;

    public function doctor(){ 
        return $this->belongsTo('App\Doctor','id');
    }

}