@extends('app')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Agama</h1>

        @session('success')
            <div class="alert alert-success" role="alert">{{ $value }}</div>
        @endsession

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('agamas.create') }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Agama</span>
                    </a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Agama</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($agamas as $agama)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $agama->agama }}</td>
                                    <td>
                                        <form action="{{ route('agamas.destroy', $agama->id) }}" method="POST">
                                            <a href="{{ route('agamas.edit', $agama->id) }}" class="btn btn-success btn-sm">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Tidak ada data agama</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{ $agamas->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection
