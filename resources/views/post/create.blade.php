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
                        Tambah Data
                    </h1>
                    <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data"
                        class="d-flex p-4">
                        @csrf
                        <div class="col-md-6 pe-4">
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="number" class="form-control  @error('nik') is-invalid @enderror" name="nik"
                                    placeholder="Masukan NIK">
                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama"
                                    placeholder="Masukan Nama">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Umur</label>
                                <input type="number" class="form-control  @error('umur') is-invalid @enderror"
                                    name="umur" placeholder="Masukan Umur">
                                @error('umur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option selected disabled>Pilih Salah Satu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                                @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('jk') is-invalid @enderror" type="radio"
                                        name="jk" value="Laki-laki">
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jk') is-invalid @enderror" type="radio"
                                        name="jk" value="Perempuan">
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                                @error('jk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                            </div>
                            <button type="submit" class="btn btn-outline-danger" name="submit">Kirim</button>
                        </div>

                        <div class="col-md-6">

                            <div class="mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control  @error('tempat') is-invalid @enderror"
                                    name="tempat" placeholder="Masukan Tempat lahir">
                                @error('tempat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control  @error('tanggal_lahir') is-invalid @enderror"
                                    name="tanggal_lahir">
                                @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror"
                                    name="alamat"></textarea>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">No telpon</label>
                                <input type="text" class="form-control  @error('no_telpon') is-invalid @enderror"
                                    name="no_telpon" placeholder="08XXXXXXXXXX">
                                @error('no_telpon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection