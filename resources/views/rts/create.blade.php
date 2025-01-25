@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Data RT</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('rts.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 col-lg-6">
                        <label for="nama_rt" class="form-label">Nama RT <span class="text-danger">*</span></label>
                        <input type="text" name="nama_rt" class="form-control @error('nama_rt') is-invalid @enderror"
                            id="nama_rt" placeholder="Nama RT...">
                        @error('nama_rt')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="nama_ketua_rt" class="form-label">Nama Ketua RT <span
                                class="text-danger">*</span></label>
                        <input type="text" name="nama_ketua_rt"
                            class="form-control @error('nama_ketua_rt') is-invalid @enderror" id="nama_ketua_rt"
                            placeholder="Nama ketua RT...">
                        @error('nama_ketua_rt')
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
