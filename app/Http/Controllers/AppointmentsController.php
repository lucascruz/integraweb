<?php

namespace App\Http\Controllers;

use App;
use App\Logo;
use App\Appointments;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
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

    public function appointments()
    {
        $param = [];
        $logo = new Logo();
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);

        return view('/patient/appointment_history', compact('param'));
    }

    public function accountconfiguration($id)
    {
        $param = [];
        $logo = new Logo();
        $accountActualizar = App\User::findOrFail($id);
        $param['medecina_logo_path'] = $logo->getLogoBasePath(1) . '/' . $logo->getLogoByCatalog(1);
        $param['medecina_logo_header_footer_path'] = $logo->getLogoBasePath(2) . '/' . $logo->getLogoByCatalog(2);
        $param['medecina_logo_middle_path'] = $logo->getLogoBasePath(3) . '/' . $logo->getLogoByCatalog(3);

        return view('/patient/account_configuration')->with('param',$param)->with('accountActualizar',$accountActualizar);
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
    public function storeAppointment(Request $request)
    {
        $appointmentAgregar = new Appointments;
        $request->validate([
            'doctor_id' => 'required',
            'reason' => 'required',
            'date' => 'required',
            'city' => 'required',
        ]);
        $appointmentAgregar->doctor_id = $request->doctor_id;
        $appointmentAgregar->reason = $request->reason;
        $appointmentAgregar->date = $request->date;
        $appointmentAgregar->city = $request->city;
        $appointmentAgregar->save();
        return redirect('/register');
       // return back()->with('agregarAppointment', 'La cita se ha enviado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments)
    {
        //
    }
}
