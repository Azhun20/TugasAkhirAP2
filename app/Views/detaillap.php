<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/detail.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Booking</title>
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
                    <a class="nav-link active mx-2" href="<?= base_url('homepage') ?>">Home</a>
                    <a class="nav-link mx-2" aria-current="page" href="<?= base_url('premium') ?>">Premium</a>
                    <a class="nav-link mx-2" href="<?= base_url('event') ?>">Event</a>
                </div>
                <div class="me-3">
                        <form action="<?= base_url('/logout') ?>"><button type="submit" class="btn-danger btn">Logout</button></form>
                    </div>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->

    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h2 class="text-light mt-5"><?=$info[0]['NamaLap']?></h1>
                    <p class="text-light"><?=$info[0]['Alamat']?></p>
                </div>
            </div>
            <div class="row mt-2">
            <?php         
                foreach ($info as $row) :
                    $nama = $row['No_lap'];
                    $ukuran = $row['size'];
                    $price = $row['harga'];
                    $img = $row['gambar'];  
            ?>
                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                    <h3><?=$nama ?></h3>
                        <div class="circle-icon position-relative mx-auto">
                            <img src="/Asset/img/<?=$img  ?>" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <div class="">
                        <p><?= $ukuran ?></p> 
                        <p>Rp.<?= $price?>,-/ Jam</p>  
                        </div>
                        <form action="http://localhost:8080/Booking/index/<?=$row['id_dtl'];?>">
                            <button class="btn1 btn-primary">Booking</button>
                        </form>
                    </div>   
                                     
                </div>
                <?php endforeach?> 
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

    <!-- Java Script -->
    <script src="<?= base_url('js/style.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>