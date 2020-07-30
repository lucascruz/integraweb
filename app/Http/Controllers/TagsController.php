<?php

namespace App\Http\Controllers;

use App;
use App\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
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

    public function tags()
    {
        return view('/admin/service/tags');
    }

    public function medical()
    {
        return view('/medical/home');
    }

    public function listtags() {
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
    public function storeTag(Request $request)
    {
        $tagAgregar = new Tags;
        $request->validate([
            'tag' => 'required',
        ]);
        $tagAgregar->tag = $request->tag;
        $tagAgregar->save();
        return back()->with('agregarTag' , 'El tag se ha agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show(Tags $tags)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */

    public function editTag($id)
    {
        $tagActualizar = App\Tags::findOrFail($id);
        return view('/admin/service/tags-edit' , compact('tagActualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function updateTag(Request $request, $id)
    {
        $tagUpdate = App\Tags::findOrFail($id);
        $tagUpdate->tag = $request->tag;
        $tagUpdate->save();
        return back()->with('updateTag' , 'El tag ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroyTag($id)
    {
        $tagEliminar = App\Tags::findOrFail($id);
        $tagEliminar->delete();
        return back()->with('eliminarTag' , 'El tag ha sido eliminado correctamente');
    }
}
