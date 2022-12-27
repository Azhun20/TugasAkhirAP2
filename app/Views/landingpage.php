<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FOnt Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;700&display=swap" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('css/respon.css') ?>">

    <!-- logo Title -->
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">

    <title>Futtosaru</title>
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
                </div>
                
                    <div class="me-3">
                        <form action="<?= base_url('/regis') ?>"><button type="submit" class="button-primary">Daftar</button></form>
                    </div>
                    <div>
                        <form action="<?= base_url('/login')?>">
                        <button type="submit" class="button-secondary">Login</button>
                        </form>
                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto">
                    <h1>Booking Anti Ribet
                        Dapatkan Promo Pengguna
                        Baru !!
                    </h1>
                    <p>Bugarkan diri dengan berolahraga</p>
                    <p class="fw-bold">Cari Kotamu</p>
                    <button type="button" class="btn btn-dark btn-lg">Daftar Sekarang</button>
                </div>
            </div>
            <!-- <img src="Asset/img/futsal.svg" alt="" class="im1 position-absolute end-0 bottom-0"> -->
            <img src="<?= base_url('Asset/img/footbar.svg') ?>" alt="" class="im2 position-absolute end-0 bottom-0">
        </div>
    </section>

    <!-- Layanan Section -->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Layanan Kami</h2>
                    <span class="sub-title">Futtosaru menjadi solusi untuk olahragamu</span>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/piala.png') ?>" alt="" class="img-event position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt4">Event</h3>
                        <p class="mt-3">Buat event olahragamu dengan mudah dimanapun,
                            Dengan banyak opsi lapangan dan promo untuk eventmu
                        </p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/ball.png') ?>" alt="" class="img-event position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt4">Lapangan</h3>
                        <p class="mt-3">Dapatkan harga lapangan termurah dan terbaik,
                            Dimanapun tempatnya opsi lapangan selalu banyak.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="<?= base_url('Asset/img/bintang.webp') ?>" alt="" class="img-event position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt4">Premium</h3>
                        <p class="mt-3">Banjir promo dan Benefit,
                            Olahraga lebih hemat dan dapatkan layanan prioritas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kompetisi"></section>

    <footer class="footer text-white pt-5 pb-4 bg-dark">
        <div class="container text-md-left">
            <div class="row text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="<?= base_url('Asset/img/icon.png') ?>" alt="">
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Perusahaan</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">STIKI Malang</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Jagoan Hosting</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Midtrans</a></a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 text-info">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Product By</h5>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Bootstrap 5</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">CodeIgniter 4</a>
                    </p>
                    <p>
                        <a href="#" class="text-white" style="text-decoration:none">Midtrans</a></a>
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-info">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i> Malang, Jawa Timur, Indonesia
                    </p>
                    <p>
                        <i class="fas fa-home mr-3"></i> @aziiss___
                    </p>
                    <p>
                        <i class="fas fa-home mr-3"></i> @_argac
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p>Copyright 2022 All right reserved by:<a href="" style="text-decoration: none;"><strong class="text-info"> STIKI Malang</strong></a> </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="<?= base_url('js/style.js') ?>"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>