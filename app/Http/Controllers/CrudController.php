<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud = Crud::all();
        return view('crud.index',['active' => 'crud'],compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create',['active' => 'crud']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'judul' => 'required|unique:cruds|max:255',
            'rating' => 'required',
            'produser' => 'required',
            'tipe' => 'required',
            'status' => 'required',
            'total_episode' => 'required',
            'durasi' => 'required',
            'tanggal_lahir' => 'required',
            'studio' => 'required',
            'genre' => 'required',
            'foto' => 'required',
        ]);

        $crud = new Crud();
        $crud->judul = $request->crud;
        $crud->rating = $request->rating;
        $crud->produser = $request->produser;
        $crud->tipe = $request->tipe;
        $crud->status = $request->status;
        $crud->total_episode = $request->total_episode;
        $crud->durasi = $request->durasi;
        $crud->tanggal_rilis = $request->tanggal_rilis;
        $crud->studio = $request->studio;
        $crud->genre = $request->genre;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $name = rand(1000, 9999) . $foto->getClientOriginalName();
            $foto->move('foto/crud/', $name);
            $crud->foto = $name;
        }
        $crud->save();

        return redirect()
            ->route('crud.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(crud $crud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(crud $crud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crud $crud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(crud $crud)
    {
        //
    }
}
