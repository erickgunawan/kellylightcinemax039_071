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

    <title>Home</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/theatre/lobby.jpg" class="d-block w-100" alt="..." height="500px" width="0px">
    </div>
    <div class="carousel-item">
      <img src="/img/theatre/theatre.png" class="d-block w-100" alt="..." height="500px" width="0px">
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<br>
<br>

<div class="container">
 <div class="row">     
  <div class="col-md-4 col-sm-12 mb-3">

<div class="card" style="width: 350px">
  <img src="<?= base_url($film['poster']); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" align="center"><?= $film['nama_film']; ?></h5>
    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
   
    <center>   
      
    <a href="<?= base_url('pages/book_movie/' . $film['id_film']); ?>" class="btn btn-primary">BOOK</a>
    
    </center>
    

  </div>
  <!-- <h2>Money Heist yang tayang pertama kali pada 2017 bercerita tentang aksi 'mastermind' yang disebut 'The Professor' (Alvaro Morte) dalam melakukan perampokan terbesar dalam sejarah Spanyol</h2> -->
</div>
  </div>

   <div class="col-md-4 col-sm-12 mb-3">

<div class="card" style="width: 800px">
  <h5 class="card-title" >SINOPSIS</h5>
  <h2 class="sinopsis"><?= $film['sinopsis'] ?></h2>
</div>
<br>
  <!-- <div class="card" style="width: 800px"> -->
    <!-- <h5 class="card-title">DETAILS...</h5> -->
    
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>