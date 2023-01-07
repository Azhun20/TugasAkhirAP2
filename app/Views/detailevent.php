<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/addevent.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Event</title>
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
                    <a class="nav-link mx-2" aria-current="page" href="<?= base_url('premium') ?>">Premium</a>
                    <a class="nav-link active mx-2" href="<?= base_url('event') ?>">Event</a>
                </div>
                <div class="me-3">
                        <form action="<?= base_url('/logout') ?>"><button type="submit" class="btn-danger btn">Logout</button></form>
                    </div>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section id="hero">
        <div class="container h-100">
        <div class="row h-100 ">
            <div class="col my-auto">
                <div class="col">
                <img class="tag1" src="/Asset/img/<?=$event->gambar?>" alt="">
                </div>
                <div class="col text-light mt-4">
                    <h4>Tanggal Mulai   : <?=$event->tgl_mulai?></h4>
                    <h4>Tanggal Selesai : <?=$event->tgl_selesai?></h4>
                </div>
            
            </div>
                <div class="col text-light my-auto">
                <h2 class="text-center align-top"><?=$event->Kota?></h2>
                    <div class="col col2 text-left">
                        <h1 class="align-top"><?=$event->nm_event?></h1>  
                        <p><?=$event->deskripsi?></p>
                    <h4 class="text-left mt-4"><?=$event->Alamat?></h3> 
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
                    <h2>Create Event</h2>
                    <span class="sub-title">Buat Eventmu Sendiri</span>
                </div>
            <div class="col-sm-12 col-md-12 col-lg-9 my-auto mx-auto mt-5 text-dark">
            <label class="text-center" for="">List Harga</label>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        GOR
                        <span class="badge bg-primary rounded-pill">Rp.1.000.000,-/hari</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Vinyl
                        <span class="badge bg-primary rounded-pill">Rp.500.000,-/hari</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Syntetic
                        <span class="badge bg-primary rounded-pill">Rp.700.000,-/hari</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Interlock
                        <span class="badge bg-primary rounded-pill">Rp.400.000,-/hari</span>
                    </li>
                    </ul>
        <div class="card border-0 shadow rounded-3 ">
            
          <div class="card-body p-sm-5">              
            <form method="post" action="">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Event</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label me-3">Pilih Gambar</label>
                <input class="pilih" type="file" id="formFile">
                </div>
                <div class="row g-3 mb-3">
                <div class="col-md-5">
                    <label for="inputState" class="form-label">Kota</label>
                    <select id="inputState" class="form-select">
                    <option selected>Kota Malang</option>
                    <option>Kota Jakarta</option>
                    <option>Kota Surabaya</option>
                    <option>Kota Bandung</option>
                    <option>Kota Solo</option>
                    <option>Kota Yogyakarta</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="inputState" class="form-label">Pilih Lapangan</label>
                    <select id="inputState" class="form-select">
                    <option selected>GOR</option>
                    <option>Finyl</option>
                    <option>Syntetis</option>
                    <option>Interlock</option>
                    </select>
                </div>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                    <label for="">Tanggal Mulai</label>
                        <input type="date" class="form-control" placeholder="Tanggal mulai" aria-label="First name">
                    </div>
                    <div class="col">
                    <label for="">Tanggal Selesai</label>
                        <input type="date" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                    </div>
                    <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Create Event</button>
              </div> 
              <hr class="my-1">
            </form>
            <form method="get" action="<?= base_url(); ?>/premium">  
                <div class="d-grid mb-0">
                    <button class="btn btn-warning btn-login text-uppercase fw-bold" type="submit">Go Premium</button>
                </div> 
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