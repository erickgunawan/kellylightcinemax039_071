<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Home</title>
</head>
<body>
<!-- //----------------------------------------------------\\




//----------------------------------------------------\\
-->


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <!--  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li> -->
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/theatre/lobby.jpg" class="d-block w-100" alt="..." height="500px" width="0px">
    </div>
    <div class="carousel-item">
      <img src="../img/theatre/theatre.png" class="d-block w-100" alt="..." height="500px" width="0px">
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
  <img src="/img/icon/playing.png" width="210px" height="70px">
  <div class="row">     
    <?php foreach ($film as $key => $row) : ?>
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="card" style="width: 18rem;">
          <img src="<?= base_url($row['poster'])  ?>">
          <div class="card-body">
            <h5 class="card-title" align="center"><?= $row['nama_film'] ?></h5>
            <p class="card-text"></p>
            <br>
            
              <center>
                
                <a href="<?= base_url('pages/movie/' . $row['id_film']); ?>" class="btn btn-primary">Details..</a>
               
             </center>
           
          </div> 
        </div>
      </div>
    <?php endforeach; ?>
<!-- <div class="col-md-4 col-sm-12 mb-3">
<div class="card" style="width: 18rem;">
  <img src="img/poster/ironman.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" align="center">Iron Man</h5>
    <p class="card-text"></p>
    <a href="movie1" class="btn btn-primary">Details..</a>
  </div>
</div>
</div>

<div class="col-md-4 col-sm-12 mb-3">
<div class="card" style="width: 18rem;">
  <img src="img/poster/prisonbreak.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" align="center">Prison Break</h5>
    <p class="card-text"></p>
    <a href="movie2" class="btn btn-primary">Details..</a>
  </div>
</div> -->
</div>
</div>



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/theatre/dolby.png" class="d-block w-100" alt="..." height="300px" width="0px">
    </div>
    <div class="carousel-item">
      <img src="img/theatre/dolby1.png" class="d-block w-100" alt="..." height="300px" width="0px">
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

<br><br><br>

<img src="/img/icon/upcoming.png" width="210px" height="70px">
<div class="container">
 <div class="row">     
  <div class="col-md-4 col-sm-12 mb-3">

    <div class="card" style="width: 18rem;">
      <img src="img/poster/avenger.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Avenger Infinity Wars</h5>
        <p class="card-text">Coming Soon...</p>
        <a href="#" class="btn btn-primary">Details...</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-12 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="img/poster/guardian.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Guardian Of The Galaxy</h5>
        <p class="card-text">Coming Soon...</p>
        <a href="#" class="btn btn-primary">Details...</a>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-12 mb-3">
    <div class="card" style="width: 18rem;">
      <img src="img/poster/captain.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Captain America</h5>
        <p class="card-text">Coming Soon...</p>
        <a href="#" class="btn btn-primary">Details...</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  -->
</body>
</html>