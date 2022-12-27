<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/premium.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Premium</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container">
            <img class="icn" src="<?= base_url('Asset/img/icon.png') ?>" alt="" width="30">
            <a class="navbar-brand ms-3" href="#">Futtosaru</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mx-auto">
                    <a class="nav-link mx-2" href="<?= base_url('homepage') ?>">Home</a>
                    <a class="nav-link active mx-2" aria-current="page" href="<?= base_url('premium') ?>">Premium</a>
                    <a class="nav-link mx-2" href="<?= base_url('event') ?>">Event</a>
                </div>
                <div class="me-3">
                        <form action="<?= base_url('/logout') ?>"><button type="submit" class="btn-danger">Logout</button></form>
                    </div>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-light">Daftar Paket</h1>
                    <p class="text-light">Pilih Paket Premium terbaikmu</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <h3 class="mt4">Beginer</h3>
                        <h4 class="mt-3">Dengan Hanya Rp.5000 /Hari dapatkan potongan Booking hingga 30%
                                        dan buat eventmu lebih keren
                        </h4>
                        <h3 class="mt-2 text-start">Rp.150.000,-</h3>
                        <button type="button" class="btn btn-dark btn-lg">Beli</button>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <h3 class="mt4">Medium</h3>
                        <h4 class="mt-3">Dapatkan Promo membuat event hingga 40% Dengan Mulai
                                            dari Rp.10.000 /Hari saja
                        </h4>
                        <h3 class="mt-4 text-start">Rp.300.000,-</h3>
                        <button type="button" class="btn btn-dark btn-lg">Beli</button>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <h3 class="mt4">Profesional</h3>
                        <h4 class="mt-3">Dapatkan Promo terbaik, tampilkan eventmu teratas
                                            dan Dapatkan layanan prioritas
                        </h4>
                        <h3 class="mt-4 text-start">Rp.400.000,-</h3>
                        <button type="button" class="btn btn-dark btn-lg">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Java Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>