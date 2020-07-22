<?php

namespace App\Http\Controllers;

use App;
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
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'insurance_id' => 'required',
            'reason' => 'required',
            'date' => 'required',
            'city' => 'required',
        ]);
        $appointmentAgregar->patient_id = $request->patient_id;
        $appointmentAgregar->doctor_id = $request->doctor_id;
        $appointmentAgregar->insurance_id = $request->insurance_id;
        $appointmentAgregar->reason = $request->reason;
        $appointmentAgregar->date = $request->date;
        $appointmentAgregar->city = $request->city;
        $appointmentAgregar->save();
        return back()->with('agregarAppointment' , 'La cita se ha enviado correctamente');
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
