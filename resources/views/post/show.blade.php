@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="row">
                    <div class="card w-75 mx-auto">
                        <br><br>
                        <h1 align="center">
                            Edit Data
                        </h1>
                        <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
                        <div class="d-flex p-4">
                            <div class="col-md-6 pe-4">
                                <div class="mb-3">
                                    <label class="form-label">Nik</label>
                                    <input type="text" class="form-control " name="nik" value="{{ $post->nik }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control " name="nama" value="{{ $post->nama }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Umur</label>
                                    <input type="text" class="form-control " name="umur" value="{{ $post->umur }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Agama</label>
                                    <input type="text" class="form-control " name="agama" value="{{ $post->agama }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control " name="jk" value="{{ $post->jk }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <a href="/post" class="btn btn-primary" type="submit">Kembali</a>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control " name="tempat" value="{{ $post->tempat }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control " name="tanggal_lahir"
                                        value="{{ $post->tanggal_lahir }}" readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control " name="alamat" value="{{ $post->alamat }}"
                                        readonly>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">NO HP</label>
                                    <input type="text" class="form-control " name="no_telpon"
                                        value="{{ $post->no_telpon }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
