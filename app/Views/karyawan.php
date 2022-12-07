<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
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
                <table class="table table-bordered">
                <a href="<?= site_url("/karyawan/add")?> " class="btn btn-primary">Tambah Karyawan</a>
                <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($karyawan as $row) : ?>
                        <tr>
                            <td><?php echo $row->id_karyawan; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->jenis_kelamin; ?></td>
                            <td><a class="btn btn-primary" href="http://localhost:8080/karyawan/show/<?=$row->id_karyawan;?>">Lihat Detail</a>
                            <a class="btn btn-danger" href="http://localhost:8080/karyawan/delete/<?= $row->id_karyawan; ?>"><i class="bi bi-trash3"></i> Hapus</a>
                            <a class="btn btn-warning" href="http://localhost:8080/karyawan/edit/<?= $row->id_karyawan; ?>"><i class="bi bi-trash3"></i> Edit</a></td>
                        </tr>

                    <?php endforeach; ?>
                </table>
                <?= $pager->links() ?>
            </div>
        </div>
    </div>
</body>
</html>