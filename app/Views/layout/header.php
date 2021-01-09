<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="/img/logo/logggo.png">
	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="asset/style.css">
	<link rel="stylesheet" type="text/css" href="asset/style.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> -->
	<title>Home</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="<?php echo base_url();?>/img/logo/logo.png" width="210px" height="70px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/theatre">Theatre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About Us</a>
          </li>
        </ul>
       <!--  <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <?php if (in_groups('admin')) :?>
          <li class="nav-item">
            <a class="nav-link" href="/pages/adminfilm">Admin</a>


          </li>
          <!-- <?php else : ?> -->
          

        <?php endif ; ?>
      </div>




      <div class="nav-login">
        <?php if (logged_in()) : ?>
         
          <!-- <div class="nav-login"> -->
            <?php if (in_groups('user')) :?>
              <a type="button" href="<?= base_url('pages/riwayat/'); ?>" class="btn btn-primary">Transaction History</a>
            <?php endif ;?>
            <a type="button" href="/logout">Logout</a>

            <?php else : ?>
              <a type="button" class="btn btn-light" id="button_login" href="/login">Login</a>  
            <?php endif ; ?>
          </div>
        </div>
      </nav>

