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
                    <form action="{{Route('murid.update',$murid->id)}} " method="post" enctype="multipart/form-data"
                        class="d-flex p-4">
                        @csrf
                        @method('put')
                        <div class="col-md-6 pe-4">
                            <div class="mb-3">
                                <label class="form-label">NIS</label>
                                <input type="number" class="form-control  @error('nis') is-invalid @enderror" name="nis"
                                    placeholder="Masukan NIS" value="{{ $murid->nis }}">
                                @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control  @error('nama') is-invalid @enderror" name="nama"
                                    placeholder="Masukan Nama" value="{{ $murid->nama }}">
                                @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select class="form-control" name="agama">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Islam" {{ $murid->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $murid->agama == 'Kristen' ? 'selected' : '' }}>Kristen
                                    </option>
                                    <option value="Katolik" {{ $murid->agama == 'Katolik' ? 'selected' : '' }}>Katolik
                                    <option value="Budha" {{ $murid->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Hindu" {{ $murid->agama == 'Hindu' ? 'selected' : '' }}>Hindu
                                    </option>
                                    </option>
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
                                        name="jk" value="Laki-laki" @if ($murid->jk == 'Laki-laki') checked @endif>
                                    <label class="form-check-label">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('jk') is-invalid @enderror" type="radio"
                                        name="jk" value="Perempuan" @if ($murid->jk == 'Perempuan') checked @endif>
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
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                                    name="tgl_lahir" value="{{ $murid->tgl_lahir}}">
                                @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror" name="alamat"
                                    value="{{ $murid->alamat }}">{{ $murid->alamat }}</textarea>
                                @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select class="form-control" name="jurusan">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Rekayasa Perangkat Lunak" {{ $murid->jurusan == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                                    <option value="Teknik Sepeda Motor" {{ $murid->jurusan == 'Teknik Sepeda Motor' ? 'selected' : '' }}>Teknik Sepeda Motor
                                    </option>
                                    <option value="Teknik Kendaraan Ringan" {{ $murid->jurusan == 'Teknik Kendaraan Ringan' ? 'selected' : '' }}>Teknik Kendaraan Ringan
                                    </option>
                                </select>
                                @error('jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Guru</label>
                                <select name="id_guru" class="form-control @error('id_guru') is-invalid @enderror" readonly>
                                    @foreach ($guru as $data)
                                    <option value="{{ $data->id }}" {{ $data->id == $data->id_guru ? 'selected' : '' }}>
                                        {{ $data->nama }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('id_guru')
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