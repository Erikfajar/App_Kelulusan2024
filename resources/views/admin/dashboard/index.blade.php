@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Welcomee Back {{ Auth::user()->username }}! 🎉</h5>
                            <p class="mb-4">
                                Selamat Datang di Halaman Admin
                            </p>

                            {{-- <a href="javascript:;" class="btn btn-sm btn-outline-primary">View
                              Badges</a> --}}
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('assets/admin') }}/assets/img/illustrations/man-with-laptop-light.png"
                                height="140" alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Jumlah Taruna</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ $jumlah_taruna }}</h4>
                                {{-- <small class="text-danger">(-14%)</small> --}}
                            </div>
                            <p class="mb-0">Angkatan Tahun 2020/2021</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-primary">
                                <i class="bx bx-group bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Jumlah Taruna Lulus</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ $taruna_lulus }}</h4>
                                {{-- <small class="text-danger">(-14%)</small> --}}
                            </div>
                            <p class="mb-0">Angkatan Tahun 2020/2021</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-success">
                                <i class="bx bx-group bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Jumlah Taruna Tidak Lulus</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ $taruna_tidak_lulus }}</h4>
                                {{-- <small class="text-danger">(-14%)</small> --}}
                            </div>
                            <p class="mb-0">Angkatan Tahun 2020/2021</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-danger">
                                <i class="bx bx-group bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Jumlah Taruna Catatan</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">{{ $taruna_catatan }}</h4>
                                {{-- <small class="text-danger">(-14%)</small> --}}
                            </div>
                            <p class="mb-0">Angkatan Tahun 2020/2021</p>
                        </div>
                        <div class="avatar">
                            <span class="avatar-initial rounded bg-label-warning">
                                <i class="bx bx-group bx-sm"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
