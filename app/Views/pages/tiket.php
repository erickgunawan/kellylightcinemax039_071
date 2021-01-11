<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <link rel="stylesheet" href="asset/movie.css">
    <link rel="stylesheet" type="text/css" href="movie/style.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <title>FILM</title>

    <title>Book</title>
  </head>

  <body>

    <br><br><br>
    <center> 
    <!-- <h1>Transaksi Berhasil...</h1></center> -->

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID Transaksi</th>
            <th scope="col">ID</th>
            <th scope="col">Nama Film</th>
            <th scope="col">Pembayaran</th>
            <th scope="col">Username</th>
            <th scope="col">Nama Cinema</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Pembelian</th>
            <th scope="col">Jam Tayang</th>
            <!-- <th scope="col">Sinopsis</th> -->
            <!-- <th scope="col">Action</th> -->
          </tr>
        </thead>
        <tbody id="result">
          <?php
          foreach ($transaksi as $key => $row) :
          ?>
            <tr>
              <th scope="row"><?= $row['id_transaksi']; ?></th>
              <td><?= $row['id']; ?></td>
              <td><?= $row['nama_film']; ?></td>
              <td><?= $row['pembayaran']; ?></td>
              <td><?= $row['username']; ?></td>
              <td><?= $row['nama_cinema']; ?></td>
              <td><?= $row['totalharga']; ?></td>
              
              <td><?= $row['pembelian']; ?></td>
              <td><?= $row['jam']; ?> </td>
              <td>
        </div>
        <?php endforeach; ?>
      </div></button></center>
    </tr>
  </tbody>
</table>
</center>
<br><br><br><br><br>
</body>
</html>