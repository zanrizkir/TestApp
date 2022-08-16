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
                            Tambah Anime
                        </h1>
                        <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
                        <form action="{{ route('crud.store') }}" method="post" enctype="multipart/form-data"
                            class="d-flex p-4">
                            @csrf
                            <div class="col-md-6 pe-4">
                                <div class="mb-3">
                                    <label class="form-label">Judul</label>
                                    <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                                        name="judul" placeholder="Masukan Judul">
                                    @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Rating</label>
                                    <input type="text" class="form-control  @error('rating') is-invalid @enderror"
                                        name="rating" placeholder="Masukan Rating">
                                    @error('rating')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Produser</label>
                                    <input type="text" class="form-control  @error('produser') is-invalid @enderror"
                                        name="produser">
                                    @error('produser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tipe</label>
                                    <select class="form-control @error('tipe') is-invalid @enderror" name="tipe">
                                        <option selected disabled>Pilih Salah Satu</option>
                                        <option value="SERIES"> - SERIES</option>
                                        <option value="MOVIE"> - MOVIE</option>
                                    </select>
                                    @error('tipe')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-control @error('tipe') is-invalid @enderror" name="tipe">
                                        <option selected disabled>Pilih Salah Satu</option>
                                        <option value="Ongoing"> - Ongoing</option>
                                        <option value="Completed"> - Completed</option>
                                    </select>
                                    @error('tipe')
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
                                    <label class="form-label"><b> Total Episode </b></label>
                                    <input type="number" class="form-control  @error('total_episode') is-invalid @enderror"
                                        name="total_episode" placeholder="Total Episode">
                                    @error('total_episode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Durasi</label>
                                    <input type="number" class="form-control  @error('durasi') is-invalid @enderror"
                                        name="durasi" placeholder="Durasi">
                                    @error('durasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Tanggal Rilis</label>
                                    <input type="date" class="form-control  @error('tanggal_rilis') is-invalid @enderror"
                                        name="tanggal_rilis" placeholder="Masukan Password">
                                    @error('tanggal_rilis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Studio</label>
                                    <input type="number" class="form-control  @error('studio') is-invalid @enderror"
                                        name="studio" placeholder="Studio">
                                    @error('studio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Genre</label>
                                    <input type="number" class="form-control  @error('genre') is-invalid @enderror"
                                        name="genre" placeholder="Genre">
                                    @error('genre')
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
