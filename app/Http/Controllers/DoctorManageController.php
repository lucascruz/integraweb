<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DoctorManageController extends Controller
{
    public function __construct()
    {
        
    }

    /////// ============== Doctor Part ============= //////////////
    public function addNewDoctor(Request $request)
    {
        $file = $request->file('profile_avatar');
        $action = $request->doctor_action;
        $status = $request->active;

        $name = $request->doctor_name;
        $email = $request->doctor_email;
        $specialization = $request->doctor_sepcialization;
        $university = $request->doctor_university;
        $address = $request->doctor_address;
        $city_id = $request->city;
        $phone_number = $request->doctor_number;

        $active = ($status == "on" ? 1 : 0);
        
        $param = [
            'name' => $name,
            'email' => $email,
            'specialization' => $specialization,
            'university' => $university,
            'address' => $address,
            'city_id' => $city_id,
            'image' => '',
            'phone_number' => $phone_number,
            'active' => $active,
        ];

        if($file)
        {
            $fileName = $file->getClientOriginalName();
            $check = $file->move(public_path(). '/images/doctor_images/', $fileName);

            $param['image'] = $fileName;
            
        }
        if($action == "add")
        {
            $doctor = new Doctor();
            $doctor->addAdminDoctor($param);
        }
        else{
            $doctor = new Doctor();
            $doctor->updateAdminDoctor($request->doctor_id, $param);
        }

        return redirect("/admin/user/doctor");
    }

    public function getDoctor()
    {
        $doctor = new Doctor();

        $result = $doctor->getDoctor(request()->doctor_id);

        return $result;
    }

    public function removeDoctor()
    {
        $doctor = new Doctor();
        $doctor->removeDoctor(request()->doctor_id);
    }

    public function editAdvanceDoctor()
    {
        $doctor = new Doctor();
        $doctor->setSpecialist(request()->advance_doctor_id, request()->specialization_list);
        $doctor->setFormation(request()->advance_doctor_id, request()->formation_list);

        //return redirect("/admin/user/doctor");
    }

    ///// =============  City Part =============== ///////

    public function getCity()
    {
        $city_id = request()->city_id;

        $doctor = new Doctor();
        $result = $doctor->getCity($city_id);
        
        return $result;
    }

    public function addNewCity(Request $request)
    {
        $action = $request->city_action;
        $status = $request->active;
        $name = $request->city_name;
                
        $active = ($status == "on" ? 1 : 0);

        $param = [
            'name' => $name,
            'extra' => '',
            'code' => '',
            'departamento_id' => 0,
            'active' => $active,
        ];

        $doctor = new Doctor();

        if($action == "add")
            $doctor->addAdminCity($param);
        else
            $doctor->updateAdminCity($request->city_id, $param);

        return redirect("/admin/user/city");
    }

    public function removeCity()
    {
        $city_id = request()->city_id;

        $doctor = new Doctor();
        $doctor->removeCity($city_id);
    }
    /////////////////////////////////////////////////////////////////////

    ///// =============  Speciality Part =============== ///////

    public function getSpeciality()
    {
        $speciality_id = request()->speciality_id;

        $doctor = new Doctor();
        $result = $doctor->getSpeciality($speciality_id);
        
        return $result;
    }

    public function addNewSpeciality(Request $request)
    {
        $action = $request->speciality_action;
        $status = $request->active;
        $name = $request->speciality_name;
                
        $active = ($status == "on" ? 1 : 0);

        $param = [
            'name' => $name,
            'active' => $active,
        ];

        $doctor = new Doctor();

        if($action == "add")
            $doctor->addAdminSpeciality($param);
        else
            $doctor->updateAdminSpeciality($request->speciality_id, $param);

        return redirect("/admin/user/speciality");
    }

    public function removeSpeciality()
    {
        $speciality_id = request()->speciality_id;

        $doctor = new Doctor();
        $doctor->removeSpeciality($speciality_id);
    }
    /////////////////////////////////////////////////////////////////////

    ///// =============  Formation Part =============== ///////

    public function getFormation()
    {
        $formation_id = request()->formation_id;

        $doctor = new Doctor();
        $result = $doctor->getFormation($formation_id);
        
        return $result;
    }

    public function addNewFormation(Request $request)
    {
        $action = $request->formation_action;
        $status = $request->active;
        $name = $request->formation_name;
                
        $active = ($status == "on" ? 1 : 0);

        $param = [
            'name' => $name,
            'active' => $active,
        ];

        $doctor = new Doctor();

        if($action == "add")
            $doctor->addAdminFormation($param);
        else
            $doctor->updateAdminFormation($request->formation_id, $param);

        return redirect("/admin/user/formation");
    }

    public function removeFormation()
    {
        $formation_id = request()->formation_id;

        $doctor = new Doctor();
        $doctor->removeFormation($formation_id);
    }
    /////////////////////////////////////////////////////////////////////
}