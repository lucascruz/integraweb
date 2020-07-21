<?php

namespace App\Http\Controllers;

use App;
use App\DoctorType;
use Illuminate\Http\Request;

class DoctorTypeController extends Controller
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

    public function type()
    {
        return view('/admin/doctor/type');
    }

    public function listtype() {
        $types = App\DoctorType::paginate(5); 
        return view('/admin/doctor/type-list', compact('types'));
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
    public function storeType(Request $request)
    {
        $typeAgregar = new DoctorType();
        $request->validate([
            'type' => 'required',
        ]);
        $typeAgregar->type = $request->type;
        $typeAgregar->save();
        return back()->with('agregarType' , 'El type se ha agregado correctamente');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorType  $doctorType
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorType $doctorType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorType  $doctorType
     * @return \Illuminate\Http\Response
     */
    public function editType($id)
    {
        $typeActualizar = App\DoctorType::findOrFail($id);
        return view('/admin/doctor/type-edit' , compact('typeActualizar'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorType  $doctorType
     * @return \Illuminate\Http\Response
     */
    public function updateType(Request $request, $id)
    {
        $typeUpdate = App\DoctorType::findOrFail($id);
        $typeUpdate->type = $request->type;
        $typeUpdate->save();
        return back()->with('updateType' , 'El type ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorType  $doctorType
     * @return \Illuminate\Http\Response
     */
    public function destroyType($id)
    {
        $typeEliminar = App\DoctorType::findOrFail($id);
        $typeEliminar->delete();
        return back()->with('eliminarType' , 'El type ha sido eliminado correctamente');
    }
}
