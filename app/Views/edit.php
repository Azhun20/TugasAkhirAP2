<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">

            <div class="card-header">
                <b>Edit Karyawan</b>
            </div>
            <?php if (session()->has('errors')): ?>
     <ul>
          <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
          <?php endforeach; ?>
     </ul>
 <?php endif ?>
            
            <div class="card-body">
                           
                <?= form_open('/karyawan/update/'.$edit->id_karyawan) ?>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID Karyawan</label>
                    <input class="form-control" type="text" value="<?= $edit->id_karyawan; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="<?= $edit->nama; ?>" name="nama">                    
                </div>
                <div class="mb-3">
                    <?php
                    if($edit->jenis_kelamin == "pria") {
                    ?>

                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="pria" checked>
                        <label class="form-check-label">
                            Pria
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="wanita">
                        <label class="form-check-label">
                            Wanita
                        </label>
                    </div>
                    
                    <?php

                    }else{
                 ?>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="pria">
                        <label class="form-check-label">
                            Pria
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="jenis_kelamin" value="wanita" checked>
                        <label class="form-check-label">
                            Wanita
                        </label>
                    </div>

                    <?php

                    }
                    
                    ?>
                                     
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                    <input class="form-control" type="text" value="<?= $edit->no_telp; ?>" name="no_telp">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="date" value="<?= $edit->tanggal_lahir; ?>" name="tanggal_lahir">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="<?= $edit->alamat; ?>" name="alamat">                    
                </div>

                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("/karyawan") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>