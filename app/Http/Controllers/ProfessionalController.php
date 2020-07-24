<?php

namespace App\Http\Controllers;

use App;
use App\Professional;
use Illuminate\Http\Request;

class ProfessionalController extends Controller
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

    public function account()
    {
        return view('/professional/accountpage');
    }

    public function report()
    {
        return view('/professional/report');
    }

    public function scheduling()
    {
        return view('/professional/scheduling');
    }

    public function services()
    {
        return view('/professional/services');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(Professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function editAccount($id)
    {
        $accountActualizar = App\User::findOrFail($id);
        return view('/professional/edit-account' , compact('accountActualizar'));
    }

    public function updateAccount(Request $request, $id)
    {
        $accountUpdate = App\User::findOrFail($id);
        $accountUpdate->name = $request->name;
        $accountUpdate->email = $request->email;
        $accountUpdate->password = $request->password;
        $accountUpdate->save();
        return back()->with('updateAccount' , 'Los datos han sido actualizados correctamente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        //
    }
}
