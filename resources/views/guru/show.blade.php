@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Guru </div>

                <div class="card-body">

                    <div class="mb-3">
                        <label for="">nama</label>
                        <input type="text" name="nama" value="{{ $guru->nama }}" class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('guru.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection