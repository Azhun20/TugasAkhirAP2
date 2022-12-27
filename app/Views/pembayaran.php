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
          <div class="card-body p-4 p-sm-5">
            <h3 class="card-title text-center mb-5 text-light">Form Pembayaran</h3>
            <form method="post" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="email" id="email" placeholder="name@example.com">
                <label for="floatingInput">ID Pembayaran</label>
              </div>
              <div class="form-floating mb">
                <input type="text" class="form-control" name="password" id="password" placeholder="Total Pembayaran">
                <label for="floatingPassword">Total Pembayaran</label>
              </div>
              <label for="formFile" class="btn text-light">Pilih Pembayaran</label>
              <div class="text-light">
                <div class="form-check form-check-inline ms-3 me-5">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    BANK
                </label>
                </div>
                <div class="form-check form-check-inline ms-3">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    E-Wallet
                </label>
            </div>
              </div>
              <div class="mb-3">
            <label for="formFile" class="btn text-light">Upload Bukti Pembayaran</label>
            <input class="pilih text-light ms-2" type="file" id="formFile">
            </div>
    
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Kirim</button>
              </div> 
              <hr class="my-2">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>