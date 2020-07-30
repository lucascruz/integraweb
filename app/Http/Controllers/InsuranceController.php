<?php

namespace App\Http\Controllers;

use App;
use App\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
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

    public function insurance()
    {
        return view('/admin/service/insurance');
    }

    public function listinsurance()
    {
        $insurance = App\Insurance::paginate(5);
        return view('/admin/service/insurance-list', compact('insurance'));
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
    public function storeInsurance(Request $request)
    {
        $insuranceAgregar = new Insurance;
        $request->validate([
            'name' => 'required',
        ]);
        $insuranceAgregar->name = $request->name;
        $insuranceAgregar->save();
        return back()->with('agregarInsurance', 'El insurance se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function editInsurance($id)
    {
        $insuranceActualizar = App\Insurance::findOrFail($id);
        return view('/admin/service/insurance-edit', compact('insuranceActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function updateInsurance(Request $request, $id)
    {
        $insuranceUpdate = App\Insurance::findOrFail($id);
        $insuranceUpdate->name = $request->name;
        $insuranceUpdate->save();
        return back()->with('updateInsurance' , 'El Insurance ha sido actualizado correctamente');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroyInsurance($id)
    {
        $insuranceEliminar = App\Insurance::findOrFail($id);
        $insuranceEliminar->delete();
        return back()->with('eliminarInsurance' , 'El Insurance ha sido eliminado correctamente');
    }
}
