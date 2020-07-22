<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorService extends Model
{
    public $table = "doctor_services";
    public $timestamps = false;

    public function doctor(){
        return $this->belongsTo('App\Doctor','id');
    }

    public function servicestitle(){
        return $this->belongsTo('App\Service', 'id');
    }
    
}