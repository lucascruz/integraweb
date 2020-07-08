<?php

namespace App\Http\Controllers;

use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageManageController extends Controller
{
    public function __construct()
    {
        
    }

    //// ===============  Logo Part ================= //////////////////
    public function getLogo()
    {
        $logo_id = request()->logo_id;

        $logo = new Logo();
        $result = $logo->getLogo($logo_id);

        return $result;
    }
    public function addNewLogo(Request $request)
    {
        $file = $request->file('profile_avatar');
        $action = $request->logo_action;
        $status = $request->active;
        $catalog = $request->catalog;

        $active = ($status == "on" ? 1 : 0);
        
        $param = [
            'title' => '',
            'catalog' => $catalog,
            'active' => $active,
        ];

        if($file)
        {
            $fileName = $file->getClientOriginalName();
            $check = $file->move(public_path(). '/images/page_logos/', $fileName);      // Here /images/page_logs must comes from the base_path

            $param['title'] = $fileName;
            
        }
        if($action == "add")
        {
            $logo = new Logo();
            $logo->addAdminLogo($param);
        }
        else{
            $logo = new Logo();
            $logo->updateAdminLogo($request->logo_id, $param);
        }

        return redirect("/admin/media/logo");
    }

    public function removeLogo()
    {
        $logo = new Logo();
        $logo->removeLogo(request()->logo_id);
    }

    //// ===============  Image Part ================= //////////////////

    public function getImage()
    {
        $image_id = request()->image_id;

        $logo = new Logo();
        $result = $logo->getImage($image_id);
        
        return $result;
    }
    public function addNewImage(Request $request)
    {
        $file = $request->file('profile_avatar');
        $action = $request->logo_action;
        $status = $request->active;
        $catalog = $request->catalog;

        $active = ($status == "on" ? 1 : 0);
        
        $param = [
            'title' => '',
            'catalog' => $catalog,
            'active' => $active,
        ];

        if($file)
        {
            $fileName = $file->getClientOriginalName();
            $check = $file->move(public_path(). '/images', $fileName);

            $param['title'] = $fileName;
            
        }
        if($action == "add")
        {
            $logo = new Logo();
            $logo->addAdminImage($param);
        }
        else{
            $logo = new Logo();
            $logo->updateAdminImage($request->logo_id, $param);
        }

        return redirect("/admin/media/image");
    }

    public function removeImage()
    {
        $logo = new Logo();
        $logo->removeImage(request()->image_id);
    }

    //// ===============  Video Part ================= //////////////////
    public function getVideo()
    {
        $video_id = request()->video_id;

        $logo = new Logo();
        $result = $logo->getVideo($video_id);
        
        return $result;
    }
    public function addNewVideo(Request $request)
    {
        $title = $request->video_url;
        $action = $request->logo_action;
        $status = $request->active;
        $catalog = $request->catalog;

        $active = ($status == "on" ? 1 : 0);
        
        $param = [
            'title' => $title,
            'catalog' => $catalog,
            'active' => $active,
        ];

        if($action == "add")
        {
            $logo = new Logo();
            $logo->addAdminVideo($param);
        }
        else{
            $logo = new Logo();
            $logo->updateAdminVideo($request->logo_id, $param);
        }

        return redirect("/admin/media/video");
    }

    public function removeVideo()
    {
        $logo = new Logo();
        $logo->removeVideo(request()->video_id);
        
    }

    //// ===============  Partner Part ================= //////////////////
    public function getPartner()
    {
        $partner_id = request()->partner_id;

        $logo = new Logo();
        $result = $logo->getPartner($partner_id);

        return $result;
    }
    public function addNewPartner(Request $request)
    {
        $file = $request->file('profile_avatar');
        $action = $request->logo_action;
        $status = $request->active;
        $active = ($status == "on" ? 1 : 0);
        
        $param = [
            'title' => '',
            'active' => $active,
        ];

        if($file)
        {
            $fileName = $file->getClientOriginalName();
            $check = $file->move(public_path(). '/images/partner_logos/', $fileName);      // Here /images/page_logs must comes from the base_path

            $param['title'] = $fileName;
            
        }
        if($action == "add")
        {
            $logo = new Logo();
            $logo->addAdminPartner($param);
        }
        else{
            $logo = new Logo();
            $logo->updateAdminPartner($request->logo_id, $param);
        }

        return redirect("/admin/media/partner");
    }

    public function removePartner()
    {
        $logo = new Logo();
        $logo->removePartner(request()->partner_id);
    }
}