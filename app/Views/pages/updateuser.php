<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css') ?>">

    <title>Edit Mahasiswa</title>
</head>

<body>
    <div class="container">
        <center>
            <h1>Edit Mahasiswa</h1><br />
            <a href="/"><button class="btn btn-dark">Daftar Mahasiswa</button></a><br /><br />
        </center>
        <form action="<?= base_url('/pages/update/' . $user['id']) ?>" method="post">
            <label for="id">ID : </label><br />
            <input class="form-control" type="text" name="id" id="id" value="<?= $user['id'] ?>" placeholder="1" readonly><br />
            <label for="nama">Nama : </label><br />
            <input class="form-control" type="text" name="nama" id="nama" value="<?= $user['nama'] ?>" placeholder="Nama" reeadonly><br />
            <label for="nohp">Nomor HP : </label><br />
            <input class="form-control" type="phone" name="nohp" id="nohp" value="<?= $user['nohp'] ?>" placeholder="Nomor HP" required><br />
            <label for="email">Email : </label><br />
            <input class="form-control" type="email" name="email" id="email" value="<?= $user['email'] ?>" placeholder="Email" required><br />
            <label for="password">Password : </label><br />
            <input class="form-control" type="password" name="password" id="password" value="<?= $user['password'] ?>" placeholder="*****" readonly><br />
            <label for="alamat">Alamat : </label><br />
            <textarea class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat" required><?= $user['alamat'] ?></textarea><br />

            <input type="submit" class="btn btn-dark float-right" value="Submit">
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>