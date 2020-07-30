<?php

namespace App\Http\Controllers;

use DB;

use App;
use App\User;
use App\Doctor;
use App\DoctorService;
use App\Service;
use Illuminate\Http\Request;

class DoctorServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function service()
    {
        $doctors = User::all();
        $services = Service::all();
        return view('/professional/services')->with('services', $services);
    }

    public function listservice($id)
    {
        // $services = App\DoctorService::findOrFail($id);
        $services = DoctorService::get();
        return view('/professional/service-list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeService(Request $request)
    {
        $serviceAgregar = new DoctorService();
        $request->validate([
            'doctor_id' => 'required',
            'services_id' => 'required',
            'price1' => 'required',
            'price2' => 'required',
            'price3' => 'required',
        ]);
        $serviceAgregar->doctor_id = $request->doctor_id;
        $serviceAgregar->services_id = $request->services_id;
        $serviceAgregar->price1 = $request->price1;
        $serviceAgregar->price2 = $request->price2;
        $serviceAgregar->price3 = $request->price3;
        $serviceAgregar->save();
        return back()->with('agregarService', 'El service se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorService $doctorService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function editService($id)
    {
        $doctors = Doctor::all();
        $services = Service::all();
        $serviceActualizar = App\DoctorService::findOrFail($id);
        return view('/admin/doctor/service-edit')->with('serviceActualizar', $serviceActualizar)->with('doctors', $doctors)->with('services', $services);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function updateService(Request $request, $id)
    {
        $serviceUpdate = App\DoctorService::findOrFail($id);
        $serviceUpdate->doctor_id = $request->doctor_id;
        $serviceUpdate->services_id = $request->services_id;
        $serviceUpdate->price1 = $request->price1;
        $serviceUpdate->price2 = $request->price2;
        $serviceUpdate->price3 = $request->price3;
        $serviceUpdate->save();
        return back()->with('updateService', 'El service ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorService  $doctorService
     * @return \Illuminate\Http\Response
     */
    public function destroyService($id)
    {
        $serviceEliminar = App\DoctorService::findOrFail($id);
        $serviceEliminar->delete();
        return back()->with('eliminarService', 'El service ha sido eliminado correctamente');
    }
}
