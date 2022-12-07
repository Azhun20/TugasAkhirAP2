<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menampilkan Data Multi Join Tabel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>
<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
	<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menampilkan Data Multi Tabel </h2>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12 margin-tb">
			<table class="table table-bordered">
		        <tr>
		            <th>No</th>
		            <th>Nama Siswa</th>
		            <th>Kelas</th>
		            <th>Jurusan</th>
		        </tr>
		        	<?php foreach($siswa as $row):?>
		        <tr>
		        	<td><?=$row->IDSiswa ?></td>
                    <td><?=$row->NamaSiswa ?></td>
                    <td><?=$row->NamaKelas ?></td>
                    <td><?=$row->NamaJurusan ?></td>

		        </tr>
		        <?php endforeach;?>
		    </table>
		</div>
	</div>
</body>
</html>