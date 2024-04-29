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
    <style>
        /* html,
      body {
        height: 100%;
        margin: 0;
      } */
        /* .container {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: auto;
        margin-top: 20px;
      } */
        /* html {
            height: 100%;
            box-sizing: border-box;
        } */

        /* *,
        *:before,
        *:after {
            box-sizing: inherit;
        } */

        /* .body-for-sticky {
            position: relative;
            min-height: 100%;
            padding-bottom: 6rem;
        }

        .sticky-footer {
            position: absolute;
            bottom: 0;
        } */

        .container {
            width: 90%;
            max-width: 960px;
            /* Batas maksimal lebar container */
            margin: 20px auto;
            /* Tengah secara horizontal */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card {
            width: 100%;
            /* Card akan mengisi seluruh lebar container */
            max-width: 600px;
            /* Batas maksimal lebar card */
            margin: 0 auto;
            /* Tengah secara horizontal */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Menambahkan sedikit bayangan untuk estetika */
            border-radius: 8px;
            /* Membulatkan sudut */
        }

        .card-body {
            padding: 20px;
            /* Menambahkan padding di dalam card */
        }

        /* Media query untuk layar kecil (misalnya ponsel) */
        @media (max-width: 768px) {
            .container {
                margin: 10px;
                padding: 0 5px;
                /* Menambahkan padding kecil pada sisi container */
            }

            .card {
                margin: 10px 0;
                /* Mengurangi margin atas dan bawah card */
            }

            .card-body {
                padding: 10px;
                /* Mengurangi padding di dalam card */
            }
        }

        .container img {
            display: block;
            /* Membuat gambar menjadi block level untuk memungkinkan margin */
            width: 150px;
            /* Membuat gambar responsif */
            height: auto;
            /* Menjaga aspek rasio gambar */
            margin: 0 auto 20px;
            /* Menambahkan margin bawah dan mengatur gambar di tengah */
            margin-top: 20px;
        }

        .title {
            text-align: center;
        }

        .img-nav {
            float: left;
            margin-right: 10px;
            width: 60px;
        }

        .navbar {
            background-color: darkcyan;
        }

        .font {
            font-size: 25px;
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

        @media only screen and (max-width: 600px) {
            .footer {
                height: auto;

            }
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
        @if ($ket_taruna->keterangan === 'lulus')
            <canvas id="canvas"></canvas>
        @else
            <canvas id="myCanvas"></canvas>
        @endif
        <div class="container">
            <img src="{{ asset('assets') }}/depan/img/logo2.png" alt="" />
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
                                        <td>NAMA</td>
                                        <td> </td>
                                        <td>:</td>
                                        <td> </td>
                                        <td>{{ $dt->nama }}</td>
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
                                        <td>{{ $dt->kompetensi_keahlian }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-auto mt-3" style="text-align: center">
                                @if ($dt->keterangan == 'lulus')
                                    <button class="btn btn-success"><b>LULUS</b></button>
                                @else
                                    <button class="btn btn-danger"><b>TIDAK LULUS <i
                                                class="fa-regular fa-face-sad-cry"></i></b></button>
                                    <p><b>Note : </b> Harap Jangan berputus asa dan terus semangat😭</p>
                                @endif
                            </div>
                            @if ($dt->keterangan == 'lulus')
                                <p class="mt-3"><b>*SKL bisa di ambil di sekolah</b></p><br>
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
