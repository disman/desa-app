@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Agama</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('agamas.update', $agama->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 col-lg-6">
                        <label for="agama" class="form-label">Nama Agama <span class="text-danger">*</span></label>
                        <input type="text" name="agama" value="{{ $agama->agama }}"
                            class="form-control @error('agama') is-invalid @enderror" id="agama"
                            placeholder="Nama agama...">
                        @error('agama')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 col-lg-6">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                            Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
