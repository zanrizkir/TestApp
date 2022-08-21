<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
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
        $post = Post::all();
        $active = 'post';
        
        return view('post.post', compact('post','active'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create',['active' => 'post']);
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
            'nik' => 'required|unique:posts|max:255',
            'nama' => 'required',
            'umur' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'no_telpon' => 'required|unique:posts|max:255',
        ]);

        $post = new Post();
        $post->nik = $request->nik;
        $post->nama = $request->nama;
        $post->umur = $request->umur;
        $post->jk = $request->jk;
        $post->agama = $request->agama;
        $post->tempat = $request->tempat;
        $post->alamat = $request->alamat;
        $post->tanggal_lahir = $request->tanggal_lahir;
        $post->no_telpon = $request->no_telpon;
        $post->save();

        return redirect()
            ->route('post.index')
            ->with('success', 'Jadwal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show',['active' => 'post'], compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit',['active' => 'post'], compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'nik' => 'required|max:255',
            'nama' => 'required',
            'umur' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'tempat' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'no_telpon' => 'required',
        ]);

        $post = $post;
        $post->nik = $request->nik;
        $post->nama = $request->nama;
        $post->umur = $request->umur;
        $post->jk = $request->jk;
        $post->agama = $request->agama;
        $post->tempat = $request->tempat;
        $post->alamat = $request->alamat;
        $post->tanggal_lahir = $request->tanggal_lahir;
        $post->no_telpon = $request->no_telpon;
        $post->save();

        return redirect()
            ->route('post.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', 'Data berhasil dihapus!');
    }
}
