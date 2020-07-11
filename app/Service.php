<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Service extends Model
{
    protected $guarded = [];

    ////////// =============  Service Type =========== //////////
    public function getAllServiceType()
    {
        return DB::table('service_type')->get();
    }

    public function getServiceType($servicetype_id)
    {
        return DB::table('service_type')
                    ->where('id', $servicetype_id)
                    ->first();
    }


    public function addAdminServiceType($param)
    {
        DB::table('service_type')->insert($param);
    }

    public function updateAdminServiceType($servicetype_id, $param)
    {
        DB::table('service_type')->where('id', $servicetype_id)
                        ->update($param);
    }
    
    public function removeServiceType($servicetype_id)
    {
        DB::table('service_type')->where('id', $servicetype_id)
                         ->delete();
    }

    public function getActiveServiceType()
    {
        return DB::table('service_type')->where('active', 1)
                         ->get();
    }
    
    /////////// ==========  Services Manage Part ============ ////////
    
    public function getAllServices()
    {
        return DB::table('services')
                        ->leftJoin('service_type', 'services.services_type_id', '=', 'service_type.id')
                        ->select('services.*', 'service_type.name AS type_name')
                        ->get();
    }

    public function addAdminService($param)
    {
        DB::table('services')->insert($param);
    }

    public function updateAdminService($service_id, $param)
    {
        if($param['image'] == "")
        {
            DB::table('services')->where('id', $service_id)
                             ->update([
                                        'title' => $param['title'], 
                                        'services_type_id' => $param['services_type_id'], 
                                        'video' => $param['video'], 
                                        'active' => $param['active'],
                                        ]);
        }
        else{
            DB::table('services')->where('id', $service_id)
                            ->update($param);
        }
    }

    public function getService($service_id)
    {
        return DB::table('services')
                        ->where('id', $service_id)
                        ->first();
    }

    public function removeService($service_id)
    {
        return DB::table('services')
                        ->where('id', $service_id)
                        ->delete();
    }
}