<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body class="d-flex flex-column h-100">
 
  <main class="container">
 
 <div class="starter-template text-center py-5 px-3">
     <h1>Hai ! <?= session()->get('name'); ?></h1>
     <p class="lead">Selamat Datang, Di Halaman Dosen</p>
 </div>

</main><!-- /.container -->
 
<div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Nilai Mahasiswa</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                <a href="<?= site_url("/dosen/add")?> " class="btn btn-primary">Tambah Data</a>
                <tr>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($dosen as $row) :
                        $tugas = $row->Tugas;
                        $uts = $row->UTS;
                        $uas = $row->UAS;
                        $total = (($tugas*30)/100 + ($uts*30)/100 + ($uas*40)/100); 
                        if($total > 85){
                            $grade ='A';
                        }else if($total < 85 && $total >79){
                            $grade ='A-';
                        }else if($total<80 && $total>74){
                            $grade ='B+';
                        }else if($total <75 && $total>69){
                            $grade ='B';
                        }else if($total <70 && $total>64){
                            $grade ='B-';
                        }else if($total <65 && $total>59){
                            $grade ='C+';
                        }else if($total <60 && $total>54){
                            $grade ='C';
                        }else if($total <55 && $total>49){
                            $grade ='C-';
                        }else if($total <50 && $total>44){
                            $grade ='D';
                        }else if($total <40){
                            $grade ='E';
                        }
                        ?>              
                        <tr>
                            <td><?php echo $row->iduser; ?></td>
                            <td><?php echo $row->NamaMahasiswa; ?></td>
                            <td><?php echo $row->Jurusan; ?></td>
                            <td><?php echo $grade; ?></td>
                            <td><a class="btn btn-warning" href="http://localhost:8080/dosen/edit/<?=$row->no;?>">Edit</a>
                            <a class="btn btn-danger" href="http://localhost:8080/dosen/delete/<?=$row->no;?>">Hapus</a></td>
                        </tr>

                    <?php endforeach; ?>
                    
                </table>
                <?= $pager->links() ?>
            <form  method="get" action="<?= base_url(); ?>/logout">               
        <div class="a-grid">
         <button class="btn btn-danger btn-login text-uppercase fw-bold" type="submit">Log Out</button>
    </div> 
    <hr class="my-4">
</form>
</div>
        </div>
    </div>
</body>
</html>