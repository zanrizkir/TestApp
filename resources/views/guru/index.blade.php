@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Guru
                    <a href="{{ route('guru.create') }}" class="btn btn-sm btn-primary" style="float: right;">Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($guru as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>
                                        <form action="{{ route('guru.destroy', $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('guru.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-warning">Edit
                                            </a> |
                                            <a href="{{ route('guru.show', $data->id) }}"
                                                class="btn btn-sm btn-outline-info">Show
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Are You Sure?')">Delete</button>
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