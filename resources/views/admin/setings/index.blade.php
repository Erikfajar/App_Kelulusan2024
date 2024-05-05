@extends('layout.main')

@section('title', 'setings')
@section('content')
    <!-- Input Sizing -->
    <div class="col-md-12">
        <div class="card mb-4">
            <hr class="m-0" />
            <div class="card-body">
                <small class="text-light fw-semibold">Setings Website</small>
                <form action="{{ route('setings.update', $setings->id) }}" method="post">
                    @csrf
                    <div class="mt-2 mb-3">
                        <label for="largeSelect" class="form-label">Setings Website Sekarang</label>
                        <select name="opsi" id="largeSelect" class="form-select form-select-lg">
                            <option selected value="{{ $setings->opsi }}">Di {{ $setings->opsi }}</option>
                            <option disabled>== Pilih Setingan Website ==</option>
                            <option value="buka">DiBuka</option>
                            <option value="tutup">DiTutup</option>
                        </select>
                    </div>
                    <div class="mt-2 mb-3">
                        <label for="largeSelect" class="form-label">Jadwal Buka Website</label>
                        <input class="form-control" name="open_time" type="datetime-local" value="{{ $setings->open_time }}"
                            id="html5-datetime-local-input" />
                    </div>
                    {{-- <div class="mt-2 mb-3">
                        <label for="largeSelect" class="form-label">Jadwal Tutup Website</label>
                        <input class="form-control" name="close_time" type="datetime-local" value="{{ $setings->close_time }}"
                            id="html5-datetime-local-input" />
                    </div> --}}
                    <div class="mt-2 mb-3">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
