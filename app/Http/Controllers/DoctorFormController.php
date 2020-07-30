<?php

namespace App\Http\Controllers;

use App;
use App\DoctorForm;
use Illuminate\Http\Request;

class DoctorFormController extends Controller
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

    public function doctorform()
    {
        return view('/admin/doctor/doctors-forms');
    }

    public function listdoctorform() {
        $doctorforms = App\DoctorForm::paginate(5); 
        return view('/admin/doctor/doctor-form-list', compact('doctorforms'));
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
    public function storeDoctorForm(Request $request)
    {
        $doctorformAgregar = new DoctorForm();
        $request->validate([
            'title' => 'required',
            'intro_text' => 'required',
        ]);
        $doctorformAgregar->title = $request->title;
        $doctorformAgregar->intro_text = $request->intro_text;
        $doctorformAgregar->save();
        return back()->with('agregarDoctorForm' , 'El doctor form se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorForm  $doctorForm
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorForm $doctorForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorForm  $doctorForm
     * @return \Illuminate\Http\Response
     */
    public function editDoctorForm($id)
    {
        $doctorformActualizar = App\DoctorForm::findOrFail($id);
        return view('/admin/doctor/doctor-form-edit' , compact('doctorformActualizar'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorForm  $doctorForm
     * @return \Illuminate\Http\Response
     */
    public function updateDoctorForm(Request $request, $id)
    {
        $doctorformUpdate = App\DoctorForm::findOrFail($id);
        $doctorformUpdate->title = $request->title;
        $doctorformUpdate->intro_text = $request->intro_text;
        $doctorformUpdate->save();
        return back()->with('updateDoctorForm' , 'El doctor form ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorForm  $doctorForm
     * @return \Illuminate\Http\Response
     */
    public function destroyDoctorForm($id)
    {
        $doctorformEliminar = App\DoctorForm::findOrFail($id);
        $doctorformEliminar->delete();
        return back()->with('eliminarDoctorForm' , 'El doctor form ha sido eliminado correctamente');
    }
}
