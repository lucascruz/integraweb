<?php

namespace App\Http\Controllers;

use App\Logo;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }
    public function truncate()
    {
        $logo = new Logo();
        $logo->init_database();
    }

    /// =============  Truncate Part  ===================  ///
    public function showSecret()
    {
        return view('secret');
    }

    public function index()
    {
        $param = [
            'login'			=> false,
            'role'			=> -1
        ];
        
        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);
        
        $param['home_big_back_ground'] = $logo->getLogoBasePath(4) . '/' . $logo->getImageByCatalog(4);
        $param['home_back_video'] = $logo->getVideoByCatalog(5);
        
        $param['partner_logos'] = $logo->getParnerList();
        

        //$param = json_encode($param);
        return view('home', compact('param'));
    }

    public function showDoctorList()
    {
        $param = [];
        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);

        
        return view('doctor.doctor_list', compact('param'));
    }

    public function showDoctorDetail()
    {
        $param = [];
        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);

        return view('doctor.doctor_detail', compact('param'));
    }

    public function showPatientAccount()
    {
        $param = [];
        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);

        return view('patient.accountpage', compact('param'));
    }


    ///// =============   Admin Manage Controller  ============ //////////////

    public function manageLogos()
    {
        $param = [
    		'logo_list'		=> null,
            'login'			=> false,
            'role'		 	=> -1
        ];
        $logo = new Logo();
        $param['logo_list'] = $logo->getAdminLogoList();
        $param['catalog_list'] = $logo->getAdminCatalogList("Logo");

        return view('admin.logo', compact('param'));
    }

    public function manageImages()
    {
        $param = [

        ];

        $logo = new Logo();
        $param['image_list'] = $logo->getAdminImageList();
        $param['catalog_list'] = $logo->getAdminCatalogList("Image");

        return view('admin.image', compact('param'));
    }

    public function manageVideos()
    {
        $param = [

        ];

        $logo = new Logo();
        $param['video_list'] = $logo->getAdminVideoList();
        $param['catalog_list'] = $logo->getAdminCatalogList("Video");

        return view('admin.video', compact('param'));
    }

    public function managePartner()
    {
        $param = [];

        $logo = new Logo();
        $param['partner_list'] = $logo->getAdminPartnerList();

        return view('admin.partner', compact('param'));
    }
}