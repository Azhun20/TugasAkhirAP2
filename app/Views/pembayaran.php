<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <title>Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/bayar.css') ?>">
  </head>
  <body>
  <div class="container">
    <div class="row">
    <h1 class="mt-3 text-light">Futtosaru</h1>
      <div class="col-sm-9 col-md-7 col-lg-5 my-auto mx-auto">
        <div class="card border-0 shadow rounded-3 ">
          <div class="card-body p-sm-5">
            <h3 class="card-title text-center mb-5 text-light">Form Pembayaran</h3>
            <?php if (session()->has('errors')): ?>
     <ul>
          <?php foreach(session('errors') as $error): ?>
                <li><?=$error ?></li>
          <?php endforeach; ?>
     </ul>
 <?php endif ?>
            
            <form action="<?=base_url();?>/premium/process " method="post" enctype="multipart/form-data">
              <?php foreach ($info as $row) :
                  $name= $row['Title'];
                  $price = $row['harga'];
                ?>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="jenis" id="jenis" value="<?=$name?>" readonly>
                <label for="floatingInput">Jenis Pembayaran</label>
              </div>
              <div class="form-floating">
                <input type="text" class="form-control" name="total" id="total" value="<?=$price?>" readonly>
                <label for="floatingPassword">Total Pembayaran</label>
              </div>
              <?php endforeach?>
              <label for="check" class="btn text-light">Pilih Pembayaran</label>
              
              <div class="text-light">
                  <div class="form-check form-check-inline ms-3 me-5">
                  <input class="form-check-input" type="radio" value="Bank" name="level" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                      BANK
                  </label>
                  </div>
                  <div class="form-check form-check-inline ms-3">
                  <input class="form-check-input" type="radio" value="E-Wallet" name="level" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                      E-Wallet
                  </label>
                  </div>
                  <div class="form-check form-check-inline ms-3">
                  <input class="form-check-input" type="radio" value="Ditempat" name="level" id="flexRadioDefault2" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                      Ditempat
                  </label>
                  </div>
                  <div class="ms-3">
                  <label class="bank" for="" >Rekening : 1534000300602 Mandiri</label>
                    <div>
                    <label class="wallet me-5" for="" >Dana : Futtosaruku </label>
                    </div>
                    <label class="wallet" for="" >Tokped : FuttosaruInd</label>
                  </div>
                  </div>
              <div class="mb-3">
            <label for="formFile" class="btn text-light">Upload Bukti Pembayaran</label>
            <input class="pilih text-light ms-2 " type="file" id="gambar" name="gambar" required>
          </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Kirim</button>
              </div> 
              </form>
             
          </div>
        </div>
      </div>
    </div>
  </div>

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

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>