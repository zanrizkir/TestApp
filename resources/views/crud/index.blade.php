@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Post
                    <a href="{{ route('crud.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Tipe</th>
                                    <th>Status</th>
                                    <th>Total Episode</th>
                                    <th>Tanggal Rilis</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($crud as $data)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->tipe }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td>{{ $data->total_episode }}</td>
                                    <td>{{ $data->tanggal_rilis }}</td>
                                    <td><img src="{{ $data->foto() }}" width="100px" height="100px" alt="Foto anime"></td>
                                    <td>
                                        <form action="{{ route('crud.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('crud.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                            </a> |
                                            <a href="{{ route('crud.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning">
                                            </a> |
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin?')">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection