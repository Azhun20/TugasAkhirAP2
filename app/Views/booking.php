<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/booking.css') ?>">

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
                    
                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl">
                
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label for="">Pilih Jam</label>
                    <div class="wrapper">
                        <div class="container cn1">

                        <?php  
                            foreach ($isi as $row) :
                                $status = "Avaible";  
                                $idJamMaster = $row['id_jam'];
                                $masterJam = $row['jam'];
                                foreach ($info as $row) :
                                    $idJamBooking = $row['id_jam'];
                                    $tgl = $row['tanggal'];
                                    if($idJamBooking == $idJamMaster):
                                        $status = "Not Avaible";
                                    endif;
                                endforeach;
                        ?>
                            <label class="option_item">
                                
                            <?php
                                if($status == "Not Avaible"):
                                ?>
                                <input type="checkbox" class="checkbox" disabled>
                                <?php
                                else:
                                ?>
                                <input type="checkbox" class="checkbox">
                                <?php
                                endif
                                ?>
                            <div class="option_inner">
                                <div class="tickmark"></div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" fill="currentColor" viewBox="0 0 24 24">
                                                            <path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm1 12v-6h-2v8h7v-2h-5z" />
                                    </svg>
                                </div>
                                <p class="mb-2"><?=$masterJam?></p>
                                <?php
                                if($status == "Not Avaible"):
                                ?>
                                <div class="name text-danger">Not Available</div>
                                <?php
                                else:
                                ?>
                                <div class="name">Available</div>
                        <?php
                            endif;
                            ?>
                            </div>
                        </label>
                        <?php
                            endforeach
                        ?>
                        </div>
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
    
    <section>
        <div class="container vh-100">
            <div class="row">
                <div class="col">
                        
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