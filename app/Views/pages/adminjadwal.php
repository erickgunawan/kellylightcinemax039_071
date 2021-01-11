<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css') ?>">

	<title>Data Jadwal</title>
</head>

<body>
	<div class="container">
		<center>
			<h1>Daftar Jadwal</h1><br />
			 <!-- <input type="text" id="search" class="form-control" placeholder="Ketik disini untuk mencari"><br /> -->
			<a href="<?= base_url('/pages/addjadwal') ?>"><button class="btn btn-dark">Tambah Jadwal +</button></a><br /><br />
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID Jadwal</th>
						<th scope="col">Jam Tayang</th>
						<th scope="col">Kursi</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody id="result">
					<?php
					foreach ($jadwal as $key => $row) :
					?>
						<tr>
							<th scope="row"><?= $row['id_jadwal']; ?></th>
							<td><?= $row['jam']; ?></td>
							<td><?= $row['stock']; ?></td>
							
							<td>
								<div class="btn-group">
									<a href="<?= base_url('/pages/editjadwal/' . $row['id_jadwal']); ?>" class="btn btn-primary btn-sm">Edit<i class="fa fa-edit"></i></a>
									<a href="<?= base_url('/pages/delete_jadwal/' . $row['id_jadwal']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus Jadwal <?= $row['jam']; ?>?')">Delete<i class="fa fa-trash"></i></a>
								</div>
								
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</center>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 -->
	<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>