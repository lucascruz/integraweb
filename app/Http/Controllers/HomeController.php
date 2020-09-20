<?php

namespace App\Http\Controllers;

use App\Logo;
use App\User;
use App\Doctor;
use App\Insurance;
use App\Service;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Comment\Doc;
use Symfony\Component\VarDumper\Caster\DoctrineCaster;

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
        $param = [];
        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);


        $user=Auth::user();

        if($user->Patient()){
            return view('patient.accountpage', compact('param'));
        }elseif($user->Admin()){
            Echo "Eres Administrador";
        }

        return view('patient.accountpage');
    }

    public function contact()
    {
        $param = [
            'login'            => false,
            'role'            => -1
        ];

        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);

        $param['home_big_back_ground'] = $logo->getLogoBasePath(4) . '/' . $logo->getImageByCatalog(4);
        $param['home_back_video'] = $logo->getVideoByCatalog(5);

        $param['partner_logos'] = $logo->getParnerList();

        //$param = json_encode($param);
        return view('contact', compact('param'));
        
    }

    public function welcome()
    {
        $user= Auth::user();

        $param = [
            'login'            => false,
            'role'            => -1
        ];

        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);

        $param['home_big_back_ground'] = $logo->getLogoBasePath(4) . '/' . $logo->getImageByCatalog(4);
        $param['home_back_video'] = $logo->getVideoByCatalog(5);

        $param['partner_logos'] = $logo->getParnerList();

        //$param = json_encode($param);

        return view('welcome', compact('param'));
    }

    public function showDoctorList(Request $request)
    {
        $param = [];
        $logo = new Logo();
        $doctor = new Doctor();

        $city = $request->query('city');
        $specialization = $request->query('specialization');
        $filterParams = [
            "city" => $city,
            "specialization" => $specialization
        ];
        
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);
        $param['doctor_list'] = $doctor->getActiveDoctorList($filterParams);
        $param['city'] = $city;
        $param['specialization'] = $specialization;

        return view('doctor.doctor_list', compact('param'));
    }


    public function showDoctorDetail($id)
    {
        $param = [];
        $insurances = Insurance::all();
        $logo = new Logo();
        $doctor = new Doctor();

        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);
        $param['doctor_detail_info'] = $doctor->getDoctorDetail($id);

        return view('doctor.doctor_detail')->with('param', $param)->with('insurances', $insurances);
    }

    public function showPatientAccount()
    {
        $param = [];
        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);


        $user=Auth::user();

        if($user->Patient()){
            return view('patient.accountpage', compact('param'));
        }elseif($user->Professional()){
           return redirect('/professional'); // echo "Eres Professional";
        }elseif($user->Admin()){
            return redirect('/admin'); // echo "Eres Admin"; 
        }

        return view('patient.accountpage', compact('param'));
    }

    ///// =============   Admin Manage Controller  ============ //////////////

    public function manageLogos()
    {
        $param = [
            'logo_list'        => null,
            'login'            => false,
            'role'             => -1
        ];
        $logo = new Logo();
        $param['logo_list'] = $logo->getAdminLogoList();
        $param['catalog_list'] = $logo->getAdminCatalogList("Logo");

        return view('admin.media.logo', compact('param'));
    }

    public function manageImages()
    {
        $param = [];

        $logo = new Logo();
        $param['image_list'] = $logo->getAdminImageList();
        $param['catalog_list'] = $logo->getAdminCatalogList("Image");

        return view('admin.media.image', compact('param'));
    }

    public function manageVideos()
    {
        $param = [];

        $logo = new Logo();
        $param['video_list'] = $logo->getAdminVideoList();
        $param['catalog_list'] = $logo->getAdminCatalogList("Video");

        return view('admin.media.video', compact('param'));
    }

    public function managePartner()
    {
        $param = [];

        $logo = new Logo();
        $param['partner_list'] = $logo->getAdminPartnerList();

        return view('admin.media.partner', compact('param'));
    }

    public function manageBenefit()
    {
        $param = [];

        $logo = new Logo();

        //$param['service_type_list'] = $service->get
        return view('admin.media.benefit', compact('param'));
    }

    ////////// =================  Doctor Part  ============= /////////////////
    public function manageDoctor()
    {
        $param = [];

        $doctor = new Doctor();
        $param['doctor_list'] = $doctor->getAllDoctorList();
        $param['city_list'] = $doctor->getActiveCityList();

        $param['speciality_list'] = $doctor->getActiveSpecialityList();
        $param['formation_list'] = $doctor->getActiveFormationList();

        return view('admin.doctor.doctor', compact('param'));
    }

    public function manageCity()
    {
        $param = [];

        $doctor = new Doctor();
        $param['city_list'] = $doctor->getCityList();

        return view('admin.doctor.city', compact('param'));
    }

    public function manageSpeciality()
    {
        $param = [];

        $doctor = new Doctor();
        $param['speciality_list'] = $doctor->getAllSpeciality();

        return view('admin.doctor.specialist', compact('param'));
    }

    public function manageFormation()
    {
        $param = [];

        $doctor = new Doctor();
        $param['formation_list'] = $doctor->getAllFormation();

        return view('admin.doctor.formation', compact('param'));
    }

    public function manageServieType()
    {
        $param = [];

        $service = new Service();
        $param['service_type_list'] = $service->getAllServiceType();

        return view('admin.service.service_type', compact('param'));
    }

    public function manageServies()
    {
        $param = [];

        $service = new Service();

        $param['service_type_list'] = $service->getAllServiceType();
        $param['service_list'] = $service->getAllServices();
        return view('admin.service.services', compact('param'));
    }
}
