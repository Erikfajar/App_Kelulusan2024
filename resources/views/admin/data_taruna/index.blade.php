@extends('layout.main')

@section('title', 'Data Taruna')

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Data Taruna</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="card-header ">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Tambah Data
            </button>
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal_import">
                Import Excel
            </button>
            <a href="{{ route('data_taruna.export') }}" class="btn btn-sm btn-secondary">Export Excel</a>
            <a href="{{ route('delete_all') }}" class="btn btn-sm btn-danger">Delete All</a>

            {{-- <a href="" class="btn btn-sm btn-success">Export Excel</a> --}}
        </div>

        {{-- <div class="d-flex my-auto btn-list justify-content-end">
  </div> --}}
        <div class="card-body">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>NIT</th>
                            <th>NAMA</th>
                            <th>KELAS</th>
                            <th>JURUSAN</th>
                            <th>KETERANGAN</th>
                            <th style="width: 100px;">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $dt->nisn }}</td>
                                <td>{{ $dt->nit }}</td>
                                <td>{{ $dt->nama }}</td>
                                <td>{{ $dt->kelas }}</td>
                                <td>{{ $dt->kompetensi_keahlian }}</td>
                                <td>
                                    @if ($dt->keterangan == 'lulus')
                                        <span class="badge bg-label-success">{{ $dt->keterangan }}</span>
                                    @else
                                        <span class="badge bg-label-danger">{{ $dt->keterangan }}</span>
                                    @endif
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                        data-bs-target="#basicModal{{ $dt->id }}">
                                        <i class="bx bx-edit-alt me-1"></i>
                                    </button>
                                    <form onsubmit="return confirm('Apakah Anda yakin?')"
                                        action="{{ route('data_taruna.destroy', $dt->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger btn-delete"><i
                                                class="bx bx-trash me-1"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @include('admin.data_taruna.modal_edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->

    @include('admin.data_taruna.modal_import')
    @include('admin.data_taruna.modal_tambah')
@endsection
