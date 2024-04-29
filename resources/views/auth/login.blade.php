<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CEK KELULUSAN | SMK Negeri 2 Subang</title>
    <link rel="stylesheet" href="{{ asset('assets') }}/depan/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/depan/bootstrap/css/bootstrap.min.css" />
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
            width: 40px;
        }

        .navbar {
            background-color: darkcyan;
        }
    </style>
</head>

<body>
    <!-- <div class="card">
      <div class="card-body">
        This is some text within a card body.
      </div>
    </div> -->

    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b style="color: white">Welcomee</b></a>
            <img class="img-nav" src="{{ asset('assets') }}/depan/img/logo1.png" alt="" />
        </div>
    </nav>

    <div class="container">
        <img src="{{ asset('assets') }}/depan/img/logo2.png" alt="" />
        <div class="card">
            <h6 class="card-header title bg-success">
                <b style="color: white">Pengumuman Kelulusan</b>
            </h6>
            <div class="card-body">
                <!-- <h5 class="card-title">Special title treatment</h5> -->
                <p class="card-text" style="text-align: center">
                    <b>SigIn!!</b> <br />
                    Silahkan Masukan Username dan Password
                </p>
                <div class="col-auto">
                    <!-- <label class="visually-hidden" for="autoSizingInputGroup"
              >Username</label
            > -->
                    <form action="{{ route('login.authenticate') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <div class="input-group-text">Username</div>
                            <input type="text" class="form-control" id="autoSizingInputGroup"
                                placeholder="Masukan Username" name="username" />
                        </div>
                        <div class="input-group mt-3">
                            <div class="input-group-text">Password</div>
                            <input type="text" class="form-control" id="autoSizingInputGroup"
                                placeholder="Masukan Password" name="password" />
                        </div>
                </div>
                <div class="col-auto mt-3">
                    <button type="submit" class="btn btn-outline-primary">Login <i class="bi bi-send"></i></button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets') }}/depan/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/depan/bootstrap/js/bootstrap.js"></script>
    @include('sweetalert::alert')

</body>

</html>
