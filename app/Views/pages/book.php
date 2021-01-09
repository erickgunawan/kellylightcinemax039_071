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

  <title>BOOK</title>
</head>
<body>
  <br><br><br>
  <div class="container">
   <div class="row">     
    <div class="col-md-4 col-sm-12 mb-3">

      <div class="card" style="width: 250px">
        <img src="<?= base_url($film['poster']); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" align="center"><?= $film['nama_film']; ?></h5>
          <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
          <!-- <a href="#" class="btn btn-primary">BOOK</a> -->
        </div>
        <!-- <h2>Money Heist yang tayang pertama kali pada 2017 bercerita tentang aksi 'mastermind' yang disebut 'The Professor' (Alvaro Morte) dalam melakukan perampokan terbesar dalam sejarah Spanyol</h2> -->
      </div>
    </div>
    
    <div class="col-md-4 col-sm-12 mb-3">
      <form action="<?= base_url('/pages/transaksi_add') ?>" method="post">
        <input class="form-control" type="hidden" name="id_film" id="id_film" value="<?= $film['id_film']?>" readonly>
      <h2 style="font-size: 20px">Nama Film</h2>
      <input class="form-control" type="text" name="nama_film" id="nama_film" value="<?= $film['nama_film'] ?>" placeholder="MONEY HEIST" readonly><br/>


      <h2 style="font-size: 20px">Jumlah Pembelian..</h2>
      <input class="form-control" type="number" name="pembelian" id="pembelian" placeholder="Jumlah pembelian" required><br/>

      <!-- <br> -->
      <label for="harga">Harga : </label>
      <!-- <output  id="result"></output> -->
      <input class="form-control" type="number" placeholder="Total Harga" id="totalharga" name="totalharga" readonly><br/>

      <br> 

      <label for="durasi">Durasi : <?= $film['durasi']; ?></label>
      <br> <br>
      <!-- <label for="stock">Stock : </label> -->
      <br><br>
      <label for="cinema">Choose Your Cinema :</label>
      <select name="nama_cinema" id="nama_cinema">
        <?php foreach ($cinema as $key => $row) : ?>
        <option value="<?= $row['nama_cinema'] ?>"><?= $row['nama_cinema'] ?></option>
    <!-- <option value="belmont">Belmont</option>
      <option value="genesis">Genesis</option> -->


      <?php endforeach; ?>
    </select>
    <br><br>
    <label for="pembayaran">Metode Pembayaran : </label>
    <!-- <input class="form-control" type="text" name="pembayaran" id="pembayaran" placeholder="OVO" required> -->
    <select name="pembayaran" id="pembayaran">
      <option value="OVO" selected="">OVO</option>
      <option value="DANA" selected="">DANA</option>
      <option value="PAYPAL" selected="">PAYPAL</option>
    </select>
  
    <br><br>
    <!-- <a href="" type="button" class="btn btn-dark">Transaction</a> -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myTrans">
      Transaction
    </button> 
    <div class="modal fade" id="myTrans" tabindex="-1" aria-labelledby="myTransLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <h2 class="modal-content" id="myTransLabel" style="font-size: 25px">Selesaikan Transaksi Dibawah ini : </h1>
          <div class="modal-header">
            <h5 class="modal-title" id="myTransLabel"> Kode VA : 3935800836627818232617</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Jika Sudah Tekan Button Lanjut Dibawah
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-dark">Lanjut</button><br /><br />
            <!-- <a href="<?= base_url('/pages/transaksi_add') ?>"   method="post" class="btn btn-dark">Lanjut</a> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>  
    </form>   






    <!-- Modal -->
     <!--    <div class="modal fade" id="myTrans" tabindex="-1" aria-labelledby="myTransLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Selesaikan Transaksi Dibawah ini</h5>
                <h2 class="modal-content" id="exampleModalLabel">Kode VA : 3935800836627818232617 </h2>
                <h1 class="modal-content" id="exampleModalLabel">Jika Sudah Tekan Button Lanjut Dibawah ini</h1>
                <a class="btn btn-dark" href="">Lanjut</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<br><br><br>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="jquery.min.js"></script>


<!-- <script>$('.form-jumlah').on('input','.prc',function(){
  var totalSum = 0;
  $('.<?= $film['harga'] ?> .prc').each(function(){
    var inputVal = $(this).val();
    if($.isNumeric(inputVal)){
      totalSum += parseFloat(inputVal);
    } 
  }) ;
  $('#result').text(totalSum);
</script>
-->

 <!-- <script>$(document).ready(function(){
    $('#pembelian').keyup(function(){
        $('#result').text($('#pembelian').val() * <?= $film['harga'] ?>);
    });   
});
</script> -->

<!-- <script> $(document).ready(function(){
    $('#pembelian').keyup(function(){
        var pembelian = parseInt($('#pembelian').val());
        $('#result').text(pembelian * <?= $film['harga'] ?>);
    });   
  });</script> -->
  <script>$(document).ready(function(){
    $('#pembelian').keyup(function(){
      var pembelian = parseInt($('#pembelian').val());
      $('#totalharga').val(pembelian * <?= $film['harga'] ?>);
    });   
  });</script>

  