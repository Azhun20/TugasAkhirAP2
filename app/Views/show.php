<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <style>ul.pagination li:hover {
    }
    ul.pagination li a{
        text-decoration: none;
        padding:5px 10px;
        border:1px solid #dedede;
        border-radius: 6px;
        margin-right:2px;
    }
    ul.pagination li a:hover {
        background-color: #4aaff8;
        color:#fff;
    }  
    </style>
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data Karyawan</b>
            </div>          
            <div class="card-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID Karyawan</label>
                    <input class="form-control" type="text" value="<?= $show->id_karyawan; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="<?= $show->nama; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                    <input class="form-control" type="text" value="<?= $show->jenis_kelamin; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No. Telp</label>
                    <input class="form-control" type="text" value="<?= $show->no_telp; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                    <input class="form-control" type="text" value="<?= $show->tanggal_lahir; ?>" aria-label="readonly input example" readonly>                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="<?= $show->alamat; ?>" aria-label="readonly input example" readonly>                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>