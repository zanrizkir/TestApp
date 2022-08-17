@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card border-secondary">
                <div class="card-header">
                    Data Murid
                    <a href="{{ route('murid.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Jurusan</th>
                                    <th>Guru</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($murid as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>{{ $data->agama }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->guru->nama }}</td>
                                    <td>
                                        <form action="{{ route('murid.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('murid.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                Edit
                                            </a> |
                                            <a href="{{ route('murid.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning">
                                                Show
                                            </a> |
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Apakah Anda Yakin?')">Delete
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