<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CEK KELULUSAN | SMK Negeri 2 Subang</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/admin/icon/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets') }}/depan/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/depan/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/depan/style.css') }}">
    <style>

        html,
        body {
            background-size: cover;
            background-image: url('{{ asset('assets/depan/img/bg-image4.png') }}');
            
        }
        .footer {
            position: relative;
            margin-top: auto;
            /* position: fixed; */
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
    {{-- <img clas src="{{ asset('assets/depan/img/gerbangsmk2.jpg') }}" alt=""> --}}
    <main class="bg">
        <div class="container">
            {{-- <img src="{{ asset('assets') }}/depan/img/logo2.png" alt="" /> --}}
            <div class="card">
                <h6 class="card-header title bg-success">
                    <b style="color: white">Pengumuman Kelulusan</b>
                </h6>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text" style="text-align: center">
                        <b>SMK Negeri 2 Subang</b> <br />
                        Tahun ajaran 2023/2024
                    </p>
                    @if ($setings->opsi == 'buka')
                        <form action="" method="get">
                            <div class="col-auto">
                                <!-- <label class="visually-hidden" for="autoSizingInputGroup"
                >Username</label
              > -->
                                <p>Silahkan masukan NIT Anda</p>
                                <div class="input-group">
                                    <div class="input-group-text">NIT</div>
                                    <input type="text" name="search" id="nit" class="form-control"
                                        placeholder="Masukan NIT Anda">
                                </div>
                            </div>
                            <div class="col-auto mt-3">
                                <button type="submit" class="btn btn-outline-primary">Cari <i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    @else
                        <h4 style="text-align: center"><b>Pengumuman Kelulusan akan segera dibuka</b></h4>
                        <h4 style="text-align: center" id="liveTime"></h4>
                    @endif

                </div>
            </div>
    </main>
    @include('halaman_depan.footer')
    <script src="{{ asset('assets/admin/icon/js/all.js') }}"></script>
    <script src="{{ asset('assets') }}/depan/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/depan/bootstrap/js/bootstrap.js"></script>
    @include('sweetalert::alert')

    @if ($open_time === null)
    @else
        <script>
            var open_time = "{{ $open_time }}";

            function updateCountdown() {
                var targetDate = new Date(open_time);
                var now = new Date();
                var countdown = targetDate - now;

                if (countdown <= 0) {
                    // Waktu target telah tercapai, hentikan interval
                    clearInterval(updateInterval);
                    document.getElementById('liveTime').textContent = "Loading";
                    // '0:0:0'

                    // Refresh halaman setelah 5 detik (5000 milidetik)
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000); // Ubah 5000 menjadi waktu refresh yang Anda inginkan (dalam milidetik)

                    return;
                }

                var days = Math.floor(countdown / (1000 * 60 * 60 * 24));
                var hours = Math.floor((countdown % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((countdown % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((countdown % (1000 * 60)) / 1000);

                // Jika jumlah jam lebih dari atau sama dengan 24, konversi menjadi hari dan sisa jam
                if (hours >= 24) {
                    days += Math.floor(hours / 24);
                    hours = hours % 24;
                }

                var formattedTime = days + ':' + hours + ':' + minutes + ':' + seconds;
                document.getElementById('liveTime').textContent = formattedTime;
            }

            // Panggil fungsi pertama kali saat halaman dimuat
            var updateInterval = setInterval(updateCountdown, 1000);
        </script>
    @endif


</body>

</html>
