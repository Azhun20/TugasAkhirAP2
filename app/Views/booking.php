<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/booking.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Booking</title>
</head>
<?php
    // $jam = array('08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00' );
    
    
    for ($i=8; $i < 23 ; $i++) {
        $list_jam[] = $i;
    }
    // $jam = array($i+':00');
    foreach ($booking as $key) :
        $mulai = $key->mulai;
        $selesai = $key->selesai;
        
        $lama = $selesai - $mulai;
        for ($i= 0; $i < $lama; $i++) {
            $mulai_tersedia = $mulai;
            unset($list_jam[array_search($mulai_tersedia, $list_jam)]);

            $mulai_tersedia  += 1;

        }
    endforeach;
    $selesai_tersedia = 10;
    for ($i=0; $i < 1 ; $i++) { 
        $selesai_tersedia += 1;
        $list_selesai[] = $selesai_tersedia;
    }
    
    // $jamtersedia.add
    
?>

<body>
<?= form_open('/booking'.$row->id_lap) ?>
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
    <img src="Asset/img/bg6.jpg" class="gambar1 vh-100" alt="">
        <div class="container h-100">
            <div class="row tag1 h-100">
            <div class="row mt-5">

                <div class="col-md-4 text-center">
                    <div class="card-layanan">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="/Asset/img/bg2.jpg" alt="" class="img-event position-relative mx-auto">
                        </div>
                        <h3>Lapangan 1</h3>
                        <p>Lapangan Besar</p> 
                        <p>Rp.150.000,-</p>                       
                    </div>                 
                </div>
            </div>
        </div>
            </div>
    </section>
    
    <!-- Detail Section -->
    <section id="detail">
        <div class="container">
        <div class="row">   
        <div class="col-12 text-center">
                    <h2>Booking</h2>
                    <span class="sub-title">Booking</span>
                </div>
            <div class="col-sm-12 col-md-12 col-lg-9 my-auto mx-auto mt-5 text-dark">
        <div class="card border-0 shadow rounded-3 ">
            
          <div class="card-body p-sm-5">              
            <form method="post" action="">
                <div class="mb-3">
                    <div class="col-md-5">
                    <label for="inputState" class="form-label">Pilih Lapangan</label>
                    <select id="inputState" class="form-select">
                    <option selected>Lapangan 1</option>
                    
                    <option>Lapangan 2</option>
                    <option>Lapangan 3</option>
                    </select>
                </div>
                </div>
                <div class="dropdown mb-3">
                <div class="mb-3">
                    <div class="col-md-5">
                    <label for="inputState" class="form-label">Jam Main</label>
                    <select id="inputState" class="form-select">
                        
                    <option selected>Jam Main</option>
                    <?php
                    foreach ($list_jam as $tersedia) : 
                        $add = $tersedia+1;
                        ?>
                    <option><?= $tersedia, ':00-',$add,':00' ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
                </div>
                       
                <div class="mb-3">
                    
                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                    <label for="">Jam Mulai</label>
                        <input type="time" class="form-control" placeholder="Tanggal mulai" aria-label="First name">
                    </div>
                    <div class="col">
                    <label for="">Jam Selesai</label>
                        <input type="time" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="">Total Pembayaran</label>
                        <input type="text">
                    </div>
                    <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Buat</button>
              </div> 
              <hr class="my-1">
            </form>
          </div>
        </div>
      </div>
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