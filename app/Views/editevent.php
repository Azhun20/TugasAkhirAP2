<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?= base_url('Asset/img/icon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('css/myevent.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>"> -->
    <title>Event</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  position-fixed w-100">
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
        <h2 class="mt-5">My Event</h2>
        <div class="card border-0 shadow rounded-3 ">
        <?php if (session()->has('errors')): ?>
     <ul>
          <?php foreach(session('errors') as $error): ?>
                <li><?=$error ?></li>
          <?php endforeach; ?>
     </ul>
 <?php endif ?>
          <div class="card-body p-sm-5">              
            <form method="post" action="/event/update/<?=$edit[0]['id_event']?>" enctype="multipart/form-data">
            <input type="hidden" name="gambarLama" value="<?=$edit[0]['gambar']?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Event</label>
                <input type="text" class="form-control" value="<?=$edit[0]['nm_event']?>" id="exampleFormControlInput1" name="nmevent" required>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Event</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required><?=$edit[0]['deskripsi']?></textarea>
                </div>
                <div class="mb-3">
                    <img src="/Asset/img/<?=$edit[0]['gambar']?>" class="img-preview" alt="">
                <div class="col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                        <label class="custom-file-label" for="gambar">Pilih gambar...</label>
                    </div>
                </div>
                </div>
                <div class="row g-3 mb-3">
                <div class="col-md-5">
                    <label for="inputState" class="form-label">Kota</label>
                    <select id="inputState" class="form-select" name="kota">
                    <option value="<?=$edit[0]['Kota']?>" selected><?=$edit[0]['Kota']?></option>
                    <option value="Kota Malang">Kota Malang</option>
                    <option value="Kota Jakarta">Kota Jakarta</option>
                    <option value="Kota Surabaya">Kota Surabaya</option>
                    <option value="Kota Bandung">Kota Bandung</option>
                    <option value="Kota Solo">Kota Solo</option>
                    <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                    </select>
                </div>
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$edit[0]['Alamat']?>" name="alamat" required>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                    <label for="">Tanggal Mulai</label>
                        <input type="date" class="form-control" placeholder="Tanggal mulai" aria-label="First name"value="<?=$edit[0]['tgl_mulai']?>" name="tgl_mulai" required>
                    </div>
                    <div class="col">
                    <label for="">Tanggal Selesai</label>
                        <input type="date" class="form-control" placeholder="Last name" aria-label="Last name" value="<?=$edit[0]['tgl_selesai']?>" name="tgl_selesai" required>
                    </div>
                    </div>
                    <div class="d-grid">
                    <?php if(session()->get('premium') == 1):?>
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Edit Event</button>
                <?php else:?>
                <label class="text-center text-bold text-danger" for="">Harus Premium</label>
                <?php endif?>
              </div> 
              <hr class="my-1">
            </form>
            <form method="get" action="<?= base_url(); ?>/premium">  
                <div class="d-grid mb-0">
                <?php if(session()->get('premium') == 0):?>
                    <button class="btn btn-warning btn-login text-uppercase fw-bold" type="submit">Go Premium</button>
                    <?php else:?>
                        <label class="text-center text-bold " for="">@Futtosaru</label>
                        <?php endif?> 
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
    
    <script> 
    function previewImg(){
        const img = document.querySelector('#gambar');
        const labelImg = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        labelImg.textContent = img.files[0].name;

        const fileImg = new FileReader();
        fileImg.readAsDataURL(sampull.files[0]);

        fileImg.onload = function(e){
            imgPreview.src = e.target.result;
        }
    }
    </script>

</body>

</html>