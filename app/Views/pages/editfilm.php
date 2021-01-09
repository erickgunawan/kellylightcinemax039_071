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
            <h1>Edit FILM</h1><br />
            <!-- <a href="/"><button class="btn btn-dark">Daftar Mahasiswa</button></a><br /><br /> -->
        </center>
        </center>
            <?= form_open_multipart(base_url('pages/film_update?id_film=' . $film['id_film'])); ?>
            <!-- <label for="id">ID : </label><br /> -->
            <!-- <input class="form-control" type="text" name="nrp" id="nrp" placeholder="ID (15-2018-039)" required><br /> -->
            <label for="nama_film">Nama : </label><br />
            <input class="form-control" type="text" name="nama_film" id="nama_film" value="<?= $film['nama_film']; ?>" placeholder="Nama FILM" required><br />
            <label for="cast">Cast : </label><br />
            <input class="form-control" type="text" name="cast" id="cast" value="<?= $film['cast']; ?>" placeholder="CAST " required><br />
            <label for="direktor">Direktor : </label><br />
            <input class="form-control" type="text" name="direktor" id="direktor" value="<?= $film['direktor'];?>" placeholder="Direktor" required><br />
            <label for="durasi">Durasi : </label><br />
            <input class="form-control" type="text" name="durasi" id="durasi" value="<?= $film['durasi']; ?>" placeholder="Durasi FILM" required><br />
            <label for="harga">Harga : </label><br />
            <input class="form-control" type="number" name="harga" id="harga" value="<?= $film['harga']; ?>" placeholder="Harga Film" required><br />
            <label for="poster">Poster : </label><br />
            <img src="<?= base_url($film['poster']); ?>"alt="poster"> <br /> <br />
            <label for="poster">Poster : </label><br />
            <input class="form-control" type="file" name="poster" multiple accept='poster' id="poster" placeholder="Choose File"><br />
            <label for="sinopsis">Sinopsis : </label><br />
            <textarea class="form-control" type="text" name="sinopsis" id="sinopsis"  placeholder="Sinopsis" required><?= $film['sinopsis']; ?></textarea><br />
            <center>
            <a href="/"><button class="btn btn-dark">Edit FILM</button></a><br /><br />
            </center>
            <!-- <input type="submit" class="btn btn-dark float-right" value="Submit"> -->
            <?= form_close(); ?>
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