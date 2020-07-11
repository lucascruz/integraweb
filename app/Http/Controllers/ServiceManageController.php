<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceManageController extends Controller
{
    public function __construct()
    {
        
    }
    ////////////  ==========  Service Part ============ /////////////

    public function addNewService(Request $request)
    {
        $file = $request->file('profile_avatar');
        $action = $request->service_action;
        $status = $request->active;
        $services_type_id = $request->services_type_id;
        $service_title = $request->service_title;
        $service_video = $request->video_url;

        $active = ($status == "on" ? 1 : 0);
        
        $param = [
            'image' => '',
            'title' => $service_title,
            'video' => $service_video,
            'services_type_id' => $services_type_id,
            'active' => $active,
        ];

        if($file)
        {
            $fileName = $file->getClientOriginalName();
            $check = $file->move(public_path(). '/images/services/', $fileName);      // Here /images/page_logs must comes from the base_path

            $param['image'] = $fileName;
            
        }
        if($action == "add")
        {
            $service = new Service();
            $service->addAdminService($param);
        }
        else{
            $service = new Service();
            $service->updateAdminService($request->service_id, $param);
        }

        return redirect("/admin/service/services");
    }
    
    public function getService()
    {
        $service_id = request()->service_id;
       
        $service = new Service();
        $result = $service->getService($service_id);

        return json_encode($result);
    }

    public  function removeService()
    {
        $service_id = request()->service_id;
     
        $service = new Service();
        $service->removeService($service_id);
    }

    //////// =============== Service Type Part  ================ ///////

    public function getServiceType()
    {
        $servicetype_id = request()->servicetype_id;

        $service = new Service();
        $result = $service->getServiceType($servicetype_id);
        
        return $result;
    }

    public function addNewServiceType(Request $request)
    {
        $action = $request->servicetype_action;
        $status = $request->active;
        $name = $request->servicetype_name;
                
        $active = ($status == "on" ? 1 : 0);

        $param = [
            'name' => $name,
            'active' => $active,
        ];

        $service = new Service();

        if($action == "add")
            $service->addAdminServiceType($param);
        else
            $service->updateAdminServiceType($request->servicetype_id, $param);

        return redirect("/admin/service/service_type");
    }

    public function removeServiceType()
    {
        $servicetype_id = request()->servicetype_id;

        $service = new Service();
        $service->removeServiceType($servicetype_id);
    }
    /////////////////////////////////////////////////////////////////////

    
}