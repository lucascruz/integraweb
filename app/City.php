<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
    public function getActiveDoctorList($filterParams)
    {
        $city = $filterParams['city'];
        $specialization = $filterParams['specialization'];

        $query = DB::table('doctors')->leftJoin('city', 'doctors.city_id', '=', 'city.id')
                                     ->where('doctors.active', 1);
        if(!empty($city)){
            $query->where('city.name', 'LIKE', '%'.$city.'%');
        }
        if(!empty($specialization)){
            $query->where('specialization', 'LIKE', '%'.$specialization.'%');
        }

        $result = $query  
            ->select('doctors.*', 'city.name AS city_name')
            ->get();
        return $result;
    }
    public function getCityNames($filterParams) {
        $name = $filterParams['name'];
        $limit = $filterParams['limit'];
        $query = DB::table('city')->take($limit);
        if(!empty($name)) {
            $query->where('name', 'LIKE', '%'.$name.'%');
        }
        $result = $query->select('name')->get();
        return $result;
    }
    
}