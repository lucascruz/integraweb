<?php

namespace App\Http\Controllers;

use App;
use App\FormItem;
use Illuminate\Http\Request;

class FormItemController extends Controller
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

    public function formitem()
    {
        return view('/admin/doctor/form-items');
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
    public function storeFormItem(Request $request)
    {
        $formitemAgregar = new FormItem();
        $request->validate([
            'item' => 'required',
            'type' => 'required',
        ]);
        $formitemAgregar->title = $request->title;
        $formitemAgregar->intro_text = $request->intro_text;
        $formitemAgregar->save();
        return back()->with('agregarDoctorForm' , 'El doctor form se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FormItem  $formItem
     * @return \Illuminate\Http\Response
     */
    public function show(FormItem $formItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FormItem  $formItem
     * @return \Illuminate\Http\Response
     */
    public function edit(FormItem $formItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FormItem  $formItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormItem $formItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FormItem  $formItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormItem $formItem)
    {
        //
    }
}
