<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $murid = Murid::with('guru')->get();
        return view('murid.index',['active' => 'murid'], compact('murid'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        return view('murid.create',['active' => 'murid'], compact('guru'));

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
            'nis' => 'required|unique:murids|max:255',
            'nama' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'id_guru' => 'required',
        ]);

        $murid = new Murid();
        $murid->nis = $request->nis;
        $murid->nama = $request->nama;
        $murid->jk = $request->jk;
        $murid->agama = $request->agama;
        $murid->tgl_lahir = $request->tgl_lahir;
        $murid->alamat = $request->alamat;
        $murid->jurusan = $request->jurusan;
        $murid->id_guru = $request->id_guru;
        $murid->save();
        return redirect()->route('murid.index')
            ->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $murid = Murid::findOrFail($id);
        return view('murid.show',['active' => 'murid'], compact('murid'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $murid = Murid::findOrFail($id);
        $guru = Guru::all();
        return view('murid.edit',['active' => 'murid'], compact('murid', 'guru'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([

            'nis' => 'required|max:255',
            'nama' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'jurusan' => 'required',
            'id_guru' => 'required',
        ]);

        $murid = Murid::findOrFail($id);
        $murid->nis = $request->nis;
        $murid->nama = $request->nama;
        $murid->jk = $request->jk;
        $murid->agama = $request->agama;
        $murid->tgl_lahir = $request->tgl_lahir;
        $murid->alamat = $request->alamat;
        $murid->jurusan = $request->jurusan;
        $murid->id_guru = $request->id_guru;
        $murid->save();
        return redirect()->route('murid.index')
            ->with('success', 'Data berhasil diedit!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $murid = Murid::findOrFail($id);
        $murid->delete();
        return redirect()->route('murid.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}