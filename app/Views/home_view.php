<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body class="d-flex flex-column h-100">
  <main class="container">
 
 <div class="starter-template text-center py-5 px-3">
     <h1>Hai ! <?= session()->get('name'); ?></h1>
     <p class="lead">Selamat Datang, Di Halaman Admin</p>
 </div>

</main>
  <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Data user</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($admin as $row) : ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->level; ?></td>
                            <td><a class="btn btn-warning" href="http://localhost:8080/admin/edit/<?=$row->id;?>">Edit</a>
                            <a class="btn btn-danger" href="http://localhost:8080/admin/delete/<?= $row->id; ?>"><i class="bi bi-trash3"></i> Hapus</a></td>
                        </tr>

                    <?php endforeach; ?>
                    
                </table>
                <form method="get" action="<?= base_url(); ?>/logout">  
            <div class="a-grid">
         <button class="btn btn-danger btn-login text-uppercase fw-bold" type="submit">Log Out</button>
    </div> 
        <hr class="my-4">
        </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <?php if (session()->has('info')): ?>
    <div class="modal fade" id="modalInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title align-center" id="exampleModalLabel">INFO</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?= (session('info')) ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
        </div>
        </div>
    </div>
    </div>
    <?php endif ?>
<!-- JS -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function(){
             $("#modalInfo").modal('show');
         });
        
    </script>
    
</body>
</html>