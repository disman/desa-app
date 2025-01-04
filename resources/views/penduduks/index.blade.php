@extends('app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Penduduk</h1>

        @session('success')
            <div class="alert alert-success" role="alert">{{ $value }}</div>
        @endsession

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('penduduks.create') }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Penduduk</span>
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Usia</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($penduduks as $penduduk)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $penduduk->nik }}</td>
                                    <td>{{ $penduduk->nama }}</td>
                                    <td>Jenis Kelamin</td>
                                    <td>{{ $penduduk->usia }}</td>
                                    <td>
                                        <form action="{{ route('penduduks.destroy', $penduduk->id) }}" method="POST">
                                            <a href="{{ route('penduduks.show', $penduduk->id) }}"
                                                class="btn btn-info btn-circle btn-sm">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            <a href="{{ route('penduduks.edit', $penduduk->id) }}"
                                                class="btn btn-success btn-circle btn-sm">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>Tidak ada data penduduk</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{!! $penduduk->links() !!}
                </div>
            </div>
        </div>

    </div>
@endsection
