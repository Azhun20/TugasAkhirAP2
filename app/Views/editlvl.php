<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Level</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">

            <div class="card-header">
                <b>Edit Level</b>
            </div>
            <?php if (session()->has('errors')): ?>
     <ul>
          <?php foreach(session('errors') as $error): ?>
                <li><?= $error ?></li>
          <?php endforeach; ?>
     </ul>
 <?php endif ?>
            
            <div class="card-body">
                           
                <?= form_open('/admin/update/'.$edit->id) ?>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID User</label>
                    <input class="form-control" type="text" value="<?= $edit->id; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input class="form-control" type="text" value="<?= $edit->name; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input class="form-control" type="text" value="<?= $edit->email; ?>" aria-label="readonly input example" readonly>                    
                </div>
            
                <div class="mb-3">
                    <?php
                    if($edit->level == "admin") {
                    ?>

                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="admin" checked>
                        <label class="form-check-label">
                            Admin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="dosen">
                        <label class="form-check-label">
                            Dosen
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="mahasiswa">
                        <label class="form-check-label">
                            Mahasiswa
                        </label>
                    </div>
                    
                    <?php

                    }else if($edit->level == "dosen"){
                 ?>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="admin">
                        <label class="form-check-label">
                            Admin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="dosen" checked>
                        <label class="form-check-label">
                            Dosen
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="mahasiswa">
                        <label class="form-check-label">
                            Mahasiswa
                        </label>
                    </div>

                    <?php

                    }else if($edit->level == "mahasiswa"){
                       ?>
                       <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="admin">
                        <label class="form-check-label">
                            Admin
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="dosen">
                        <label class="form-check-label">
                            Dosen
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="level" value="mahasiswa" checked>
                        <label class="form-check-label">
                            Mahasiswa
                        </label>
                    </div>
                    <?php
                    }else{
                        ?>
                        <div class="form-check form-check-inline">
                         <input type="radio" name="level" value="admin">
                         <label class="form-check-label">
                             Admin
                         </label>
                     </div>
                     <div class="form-check form-check-inline">
                         <input type="radio" name="level" value="dosen">
                         <label class="form-check-label">
                             Dosen
                         </label>
                     </div>
                     <div class="form-check form-check-inline">
                         <input type="radio" name="level" value="mahasiswa">
                         <label class="form-check-label">
                             Mahasiswa
                         </label>
                     </div>
                     <?php
                    }
                    
                    ?>
                                     
                </div>

                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("/admin") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>