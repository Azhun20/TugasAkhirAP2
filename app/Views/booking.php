<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/event.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Booking</title>
</head>

<body>

    <section id="hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6 hero-tagline my-auto mx-auto">
                    <h1>Hai Kamu, Mau Tau event Didekatmu?</h1>
                    <div class="btnSearch mx-auto">
                        <input type="text" class="search bg-light ps-4" placeholder="Kota Malang" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Liga Profesional</p>
                        </div>
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Tournament Futsal SMP</p>
                        </div>
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Tournament Futsal SMA/SMK</p>
                        </div>
                        <div class="col">
                            <img src="Asset/img/bg5.jpg" class="card1 mx-4" alt="">
                            <p>Tournament Futsal LIMA</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Layanan Section -->
    <section id="detail">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Booking</h2>
                    <span class="sub-title">Booking dengan mudah</span>
                </div>
            </div>
            <form>
                <div class="mb-3">
                    <label for="Email1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="noRek" class="form-label">No HP</label>
                    <input type="number" class="form-control" id="password" placeholder="1300**">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Hari</label>
                    <div class="dropdown">
                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Hari
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Senin</a></li>
                            <li><a class="dropdown-item" href="#">Selasa</a></li>
                            <li><a class="dropdown-item" href="#">Rabu</a></li>
                            <li><a class="dropdown-item" href="#">Kamis</a></li>
                            <li><a class="dropdown-item" href="#">Jumat</a></li>
                            <li><a class="dropdown-item" href="#">Sabtu</a></li>
                            <li><a class="dropdown-item" href="#">Minggu</a></li>
                        </ul>
                    </div>
                </div>
                <label for="ulangpass" class="form-label">Main</label>
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Jam
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">1 Jam</a></li>
                        <li><a class="dropdown-item" href="#">2 Jam</a></li>
                        <li><a class="dropdown-item" href="#">3 Jam</a></li>
                    </ul>
                </div>
                <div class="button text-center mt-3">
                    <button type="submit" class="btn btn-success col-md-6">Bayar</button>
                </div>
            </form>
        </div>
        </div>
    </section>

    <!-- footer -->
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



</body>

</html>