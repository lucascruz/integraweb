<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Doctor extends Model
{
    protected $guarded = [];

    ///// ============  Doctor Find Part (For Homepage) =============  /////////
    public function getActiveDoctorList()
    {
        $result =  DB::table('doctors')->leftJoin('city', 'doctors.city_id', '=', 'city.id')
                                ->where('doctors.active', 1)
                                ->select('doctors.*', 'city.name AS city_name')
                                ->get();
        return $result;
    }

    public function getDoctorDetail($doctor_id)
    {
        $result = DB::table('doctors')->leftJoin('city', 'doctors.city_id', '=', 'city.id')
                                    ->where('doctors.id', $doctor_id)
                                    ->select('doctors.*', 'city.name AS city_name')
                                    ->first();

      
        $result->speciality_array = array();

        if($result->speciality_list != '')
        {
            $result->speciality_array = explode(',', $result->speciality_list);    
        }

        $result->formation_array = array();

        if($result->formation_list != '')
        {
            $result->formation_array = explode(',', $result->formation_list);    
        }
        
        return $result;
    }

    ///// ============  Doctor Part (For Admin) =============  /////////
    public function getAllDoctorList()
    {
        $result =  DB::table('doctors')->leftJoin('city', 'doctors.city_id', '=', 'city.id')
                                ->select('doctors.*', 'city.name AS city_name')
                                ->get();

        for($i = 0; $i < count($result); $i++)
        {
            $result[$i]->str_specialist = "";

            if($result[$i]->speciality_list == '')
                continue;      
            $array1 = explode(',', $result[$i]->speciality_list);

            $str_specialist = "";
            for($j = 0; $j < count($array1); $j++)
            {
                $specialist_name =  DB::table('specialist')->where('id', $array1[$j])
                                       ->first()->name;
                $str_specialist .= ($specialist_name .", ");
            }
            $result[$i]->str_specialist = $str_specialist;
        }
        for($i = 0; $i < count($result); $i++)
        {
            $result[$i]->str_formation = "";

            if($result[$i]->formation_list == '')
                continue;      
            $array1 = explode(',', $result[$i]->formation_list);

            $str_formation = "";
            for($j = 0; $j < count($array1); $j++)
            {
                $specialist_name =  DB::table('formation')->where('id', $array1[$j])
                                       ->first()->name;
                $str_formation .= ($specialist_name .", ");
            }
            $result[$i]->str_formation = $str_formation;
        }

        return $result;
    }

    public function addAdminDoctor($param)
    {
        DB::table('doctors')->insert($param);
    }

    public function updateAdminDoctor($doctor_id, $param)
    {
        DB::table('doctors')->where('id', $doctor_id)
                            ->update($param);
    }

    public function getDoctor($doctor_id)
    {
        return DB::table('doctors')->where('id', $doctor_id)
                            ->get();
    }

    public function removeDoctor($doctor_id)
    {
        DB::table('doctors')->where('id', $doctor_id)
                            ->delete();
    }

    public function setSpecialist($doctor_id, $speciality_list)
    {
        
        DB::table('doctors')->where('id', $doctor_id)
                            ->update(['speciality_list' => $speciality_list,]);
    }

    public function setFormation($doctor_id, $formation_list)
    {
        
        DB::table('doctors')->where('id', $doctor_id)
                            ->update(['formation_list' => $formation_list,]);
    }


    ////// ============  City Part  =============  /////////
    public function addAdminCity($param)
    {
        DB::table('city')->insert($param);
    }

    public function updateAdminCity($city_id, $param)
    {
        DB::table('city')->where('id', $city_id)
                        ->update($param);
    }
    
    public function removeCity($city_id)
    {
        DB::table('city')->where('id', $city_id)
                         ->delete();
    }

    public function getActiveCityList()
    {
        return DB::table('city')->where('active', 1)
                         ->get();
    }

    public function getActiveSpecialityList()
    {
        return DB::table('specialist')->where('active', 1)
                      ->get();
    }
    
    public function getActiveFormationList()
    {
        return DB::table('formation')->where('active', 1)
                      ->get();
    }

    public function getCityList()
    {
        return DB::table('city')
                         ->get();
    }

    
    public function getCity($city_id)
    {
        return DB::table('city')

                    ->where('id', $city_id)
                    ->get();
    }

    ///// =============== Speciality Part ==================  ///////

    public function addAdminSpeciality($param)
    {
        DB::table('specialist')->insert($param);
    }

    public function updateAdminSpeciality($special_id, $param)
    {
        DB::table('specialist')->where('id', $special_id)
                        ->update($param);
    }
    
    public function removeSpeciality($special_id)
    {
        DB::table('specialist')->where('id', $special_id)
                         ->delete();
    }

    public function getActiveSpeciality()
    {
        return DB::table('specialist')->where('active', 1)
                         ->get();
    }
    
    public function getAllSpeciality()
    {
        return DB::table('specialist')
                         ->get();
    }
    
    public function getSpeciality($special_id)
    {
        return DB::table('specialist')
                    ->where('id', $special_id)
                    ->get();
    }
    /////////// ============================ //////////////////////

      ///// =============== Speciality Part ==================  ///////

      public function addAdminFormation($param)
      {
          DB::table('formation')->insert($param);
      }
  
      public function updateAdminFormation($special_id, $param)
      {
          DB::table('formation')->where('id', $special_id)
                          ->update($param);
      }
      
      public function removeFormation($special_id)
      {
          DB::table('formation')->where('id', $special_id)
                           ->delete();
      }
  
      public function getActiveFormation()
      {
          return DB::table('formation')->where('active', 1)
                           ->get();
      }
      
      public function getAllFormation()
      {
          return DB::table('formation')
                           ->get();
      }
      
      public function getFormation($special_id)
      {
          return DB::table('formation')
                      ->where('id', $special_id)
                      ->get();
      }
      /////////// ============================ //////////////////////
}