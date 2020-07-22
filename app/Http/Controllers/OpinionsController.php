<?php

namespace App\Http\Controllers;

use App;
use App\Opinions;
use Illuminate\Http\Request;

class OpinionsController extends Controller
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

    public function opinions()
    {
        $opinions = App\Opinions::paginate(5);
        return view('/doctor/opinions', compact('opinions'));
    }

    public function listtags()
    {
        $tags = App\Tags::paginate(5);
        return view('/admin/service/tags-list', compact('tags'));
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
    public function storeOpinion(Request $request)
    {
        $opinionAgregar = new Opinions;
        $request->validate([
            'patient_id' => 'required',
            'doctors_id' => 'required',
            'opinion_content' => 'required',
        ]);
        $opinionAgregar->patient_id = $request->patient_id;
        $opinionAgregar->doctors_id = $request->doctors_id;
        $opinionAgregar->opinion_content = $request->opinion_content;
        $opinionAgregar->save();
        return back()->with('agregarOpinion', 'La Opinion se ha enviado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opinions  $opinions
     * @return \Illuminate\Http\Response
     */
    public function show(Opinions $opinions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opinions  $opinions
     * @return \Illuminate\Http\Response
     */
    public function edit(Opinions $opinions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opinions  $opinions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opinions $opinions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opinions  $opinions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opinions $opinions)
    {
        //
    }
}
