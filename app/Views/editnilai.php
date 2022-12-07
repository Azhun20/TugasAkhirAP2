<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Nilai Mahasiswa</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">

            <div class="card-header">
                <b>Edit Data Nilai Mahasiswa</b>
            </div>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Lagi</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>

            
            <div class="card-body">
            
                <?= form_open('/dosen/update/'.$edit->no) ?>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NRP</label>
                    <input class="form-control" type="numeric" value="<?= $edit->iduser; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="<?= $edit->NamaMahasiswa; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                    <input class="form-control" type="text" value="<?= $edit->Jurusan; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tugas</label>
                    <input class="form-control" type="numeric" value="<?= $edit->Tugas; ?>" name="tugas">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">UTS</label>
                    <input class="form-control" type="numeric" value="<?= $edit->UTS; ?>" name="uts">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">UAS</label>
                    <input class="form-control" type="numeric" value="<?= $edit->UAS; ?>" name="uas">                    
                </div>

                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("/dosen") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>