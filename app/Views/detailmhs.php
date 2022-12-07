<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Nilai</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body class="d-flex flex-column h-100">
 
  <main class="container">
 
 <div class="starter-template text-center py-5 px-3">
     <h1>Halaman Detail Nilai Mahasiswa</h1>
     <p class="lead">Halaman Detail</p>
 </div>

</main><!-- /.container -->
 
<div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Ranking Nilai Matakuliah</b>
                <p>Grade : Tugas 30%, UTS 30%, UAS 40%</p>
            </div>
            
            <div class="card-body">
                <table class="table table-bordered">
                <tr>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Tugas</th>
                        <th>UTS</th>
                        <th>UAS</th>
                    </tr>
                    <?php
                    foreach ($mahasiswa as $row) :   ?>              
                        <tr>
                            <td><?php echo $row->iduser; ?></td>
                            <td><?php echo $row->NamaMahasiswa; ?></td>
                            <td><?php echo $row->Jurusan; ?></td>
                            <td><?php echo $row->Tugas ?></td>
                            <td><?php echo $row->UTS ?></td>
                            <td><?php echo $row->UAS ?></td>
                        </tr>

                    <?php endforeach; ?>
                    
                </table>
                <?= $pager->links() ?>
            <form method="get" action="<?= base_url(); ?>/mahasiswa">  
        <div class="a-grid">
         <button class="btn btn-danger btn-login text-uppercase fw-bold" type="submit">back</button>
        </div> 
        <hr class="my-4">
    </form>
    </div>
        </div>
    </div>
</body>
</html>