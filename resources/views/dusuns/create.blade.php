@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Dusun</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('dusuns.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 col-lg-6">
                        <label for="nama_dusun" class="form-label">Nama Dusun <span class="text-danger">*</span></label>
                        <input type="text" name="nama_dusun"
                            class="form-control @error('nama_dusun') is-invalid @enderror" id="nama_dusun"
                            placeholder="Nama dusun...">
                        @error('nama_dusun')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="nama_kadus" class="form-label">Nama Kepala Dusun <span
                                class="text-danger">*</span></label>
                        <input type="text" name="nama_kadus"
                            class="form-control @error('nama_kadus') is-invalid @enderror" id="nama_kadus"
                            placeholder="Nama kepala dusun...">
                        @error('nama_kadus')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-lg-6">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                            Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
