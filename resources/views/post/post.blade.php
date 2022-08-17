@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Post
                    <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary" style="float: right">
                        Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tempat</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                    <th>No Telpon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($post as $data)
                                <tr>
                                    {{-- <td>{{ $index + 1 }}</td> --}}
                                    <td>{{$no++}} </td>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->umur }}</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>{{ $data->agama }}</td>
                                    <td>{{ $data->tempat }}</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->no_telpon }}</td>
                                    {{-- <td><img src="{{ asset('/foto/post/' . $data->foto)}}" width="100px" height="100px" alt="Foto anime"></td> --}}
                                    <td>
                                        <form action="{{ route('post.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('post.edit', $data->id) }}" class="btn btn-sm btn-outline-success">Edit
                                            </a> |
                                            <a href="{{ route('post.show', $data->id) }}" class="btn btn-sm btn-outline-warning">Show
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