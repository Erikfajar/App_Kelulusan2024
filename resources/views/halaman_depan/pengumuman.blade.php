<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CEK KELULUSAN | SMK Negeri 2 Subang</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/icon/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets') }}/depan/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/depan/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/animasi/animasi.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/depan/style.css') }}">
    <style>
        html,
        body {
            background-size: cover;
            background-image: url('{{ asset('assets/depan/img/bg-image4.png') }}');

        }

        .item::after {
            content: "";
            display: block;
            width: 100%;
            /* Lebar garis */
            height: 2px;
            /* Ketebalan garis */
            background-color: #000;
            /* Warna garis */
            margin-top: 5px;
            /* Jarak garis dari teks */
        }

        .footer {
            position: relative;
            bottom: 0;
            color: #707070;
            height: 2em;
            left: 0;
            font-size: small;
            width: 100%;
        }

    </style>
</head>

<body>
    <!-- <div class="card">
      <div class="card-body">
        This is some text within a card body.
      </div>
    </div> -->

    @include('halaman_depan.navbar')

    <main>
        @if ($setings == 'buka')
            
      
        @if ($ket_taruna->keterangan === 'lulus')
            <canvas id="canvas"></canvas>
            {{-- @else
            <canvas id="myCanvas"></canvas> --}}
        @endif

        @endif
        <div class="container">
            {{-- <img src="{{ asset('assets') }}/depan/img/logo2.png" alt="" /> --}}
            <div class="card">
                <h6 class="card-header title bg-success">
                    <b style="color: white">Pengumuman Kelulusan</b>
                </h6>
                <div class="card-body">
                    @if ($setings == 'buka')
                        @foreach ($searchResults as $dt)
                            <!-- <h5 class="card-title">Special title treatment</h5> -->
                            <p class="card-text item"><b>NIT : {{ $dt->nit }}</b></p>
                            <div class="col-auto">
                                <!-- <label class="visually-hidden" for="autoSizingInputGroup"
          >Username</label
        > -->
                                <table>
                                    <tr>
                                        <td>NAMA</td>
                                        <td> </td>
                                        <td>:</td>
                                        <td> </td>
                                        <td>{{ $dt->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td> </td>
                                        <td>:</td>
                                        <td> </td>
                                        <td>{{ $dt->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <td>NIT</td>
                                        <td> </td>
                                        <td>:</td>
                                        <td> </td>
                                        <td>{{ $dt->nit }}</td>
                                    </tr>

                                    <tr>
                                        <td>KELAS</td>
                                        <td> </td>
                                        <td>:</td>
                                        <td> </td>
                                        <td>{{ $dt->kelas }}</td>
                                    </tr>
                                    <tr>
                                        <td>KOMPETENSI KEAHLIAN</td>
                                        <td> </td>
                                        <td>:</td>
                                        <td> </td>
                                        @switch($dt->kompetensi_keahlian)
                                        @case('ATPH')
                                            <td>Agribisnis Tanaman Pangan & Holtikultura</td>
                                            @break
                                    
                                        @case('APHP')
                                            <td>Agribisnis Pengolahan Hasil Pertanian</td>
                                            @break
                                    
                                        @case('APAT')
                                            <td>Agribisnis Perikanan Air Tawar</td>
                                            @break
                                    
                                        @case('ATU')
                                            <td>Agribisnis Ternak Unggas</td>
                                            @break
                                    
                                        @case('NKN')
                                            <td>Nautika Kapal Niaga</td>
                                            @break
                                    
                                        @case('TKN')
                                            <td>Teknika kapal Niaga</td>
                                            @break
                                    
                                        @case('NKPI')
                                            <td>Nautika Kapal Penangkap Ikan</td>
                                            @break
                                    
                                        @case('TBSM')
                                            <td>Teknik Bisnis Sepeda Motor</td>
                                            @break
                                    
                                        @case('TPM')
                                            <td>Teknik Pemesinan</td>
                                            @break
                                    
                                        @case('TAB')
                                            <td>Teknik Alat Berat</td>
                                            @break
                                    
                                        @case('TLOG')
                                            <td>Teknik Logistik</td>
                                            @break
                                    
                                        @case('TITL')
                                            <td>Teknik Instalasi Tenaga Listrik</td>
                                            @break
                                    
                                        @case('RPL')
                                            <td>Rekayasa Perangkat Lunak</td>
                                            @break
                                    
                                        @case('TABOG')
                                            <td>Tata Boga</td>
                                            @break
                                    
                                        @case('UPW')
                                            <td>Usaha Perjalanan Wisata</td>
                                            @break
                                    
                                        @case('TABUS')
                                            <td>Tata Busana</td>
                                            @break
                                    
                                        @default
                                            <td> - </td>
                                    @endswitch
                                    
                                    </tr>
                                </table>
                            </div>
                            <div class="col-auto mt-3" style="text-align: center">
                                @if ($dt->keterangan == 'lulus')
                                    <p><b>Selamat Anda Di Nyatakan </b></p>
                                    <button class="btn btn-success"><b>LULUS</b></button>
                                @else
                                    <button class="btn btn-danger"><b>TIDAK LULUS <i
                                                class="fa-regular fa-face-sad-cry"></i></b></button>
                                    <p><b>Note : </b> Harap Jangan berputus asa dan terus semangat😭</p>
                                @endif
                            </div>
                            @if ($dt->keterangan == 'lulus')
                                <p class="mt-3"><b>*Pengambilan SKL Bisa Menghubungi Wali Kelas</b></p><br>
                            @endif
                        @endforeach
                    @else
                        <h4 style="text-align: center">Web Belum di Buka!!</h4>
                    @endif

                    <a href="{{ route('halaman_depan') }}" class="btn btn-sm btn-outline-primary mt-2">
                        << Kembali</a>
                </div>
            </div>
        </div>
    </main>
    @include('halaman_depan.footer')
    <script src="{{ asset('assets/admin/icon/js/all.js') }}"></script>
    <script src="{{ asset('assets') }}/depan/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/depan/bootstrap/js/bootstrap.js"></script>
    <script src="{{ asset('assets/animasi/animasi2.js') }}"></script>
    <script src="{{ asset('assets/animasi/animasi.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>
