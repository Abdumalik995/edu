<?php

 if (isset($_POST['uz'])) {
    $_SESSION['lang'] = 'uz';
    
  } else {
    $_SESSION['lang'] = 'ru';
  } 

  $lang = $_SESSION['lang'];
  include_once('/controllers/MainController.php'); // shunchaki xatolikni tekshirish uchun
  //include_once(ROOT.'/views/blogs/header.php'); // shunchaki xatolikni tekshirish uchun

  
 ?>
<!doctype html>
<html lang="en">
  <head>
    <title>
      <?php
        if ($_SESSION['lang'] == 'uz') {
          echo WEBNAME;
        } else {
          echo WEBIMYA; 
        } ?>
                  
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link href="/../template/images/info.jpg" rel="icon" sizes="32x32" type="image/jpg">
    <link rel="stylesheet" href="/../template/css/bootstrap.css">
    <link rel="stylesheet" href="/../template/css/animate.css">
    <link rel="stylesheet" href="/../template/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/../template/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/../template/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/../template/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/../template/css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/../template/css/style.css">
  </head>
  <body>
    
     <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="http://edu"><?php if($lang=='ru') echo "УНИВЕРСИТЕТ"; else echo "UNIVERSITET"; ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=$menu['0']['url']?>" id="dropdown04" aria-haspopup="true" aria-expanded="false"><?php echo $menu['0']['name'] ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <?php foreach ($dropdown1 as $minmenu) {if($minmenu['nav_id']==$menu['0']['id']){ ?>
                    <a class="dropdown-item" href="http:/content/<?=$minmenu['id']?>"><?php echo $minmenu['name'] ?></a>
                  <?php }} ?>
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=$menu['1']['url']?>" id="dropdown04"  aria-haspopup="true" aria-expanded="false"><?php echo $menu['1']['name']; ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">

                  <?php foreach ($dropdown1 as $minmenu) {if($minmenu['nav_id']==$menu['1']['id']){ ?>
                    <a class="dropdown-item" href="http:/fakultet/<?=$minmenu['id']?>"><?php echo $minmenu['name'] ?></a>
                  <?php }} ?>

                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=$menu['2']['url']?>" id="dropdown04" aria-haspopup="true" aria-expanded="false"><?php echo $menu['2']['name']; ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <?php foreach ($dropdown1 as $minmenu) {if($minmenu['nav_id']==$menu['2']['id']){ ?>
                    <a class="dropdown-item" href=""><?php echo $minmenu['name'] ?></a>
                  <?php }} ?>
                </div>

              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=$menu['3']['url']?>" id="dropdown05"  aria-haspopup="true" aria-expanded="false"><?php echo $menu['3']['name']; ?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <?php foreach ($dropdown1 as $minmenu) {if($minmenu['nav_id']==$menu['3']['id']){ ?>
                    <a class="dropdown-item" href=""><?php echo $minmenu['name'] ?></a>
                  <?php }} ?>

                </div>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=$menu['4']['url']?>"><?php echo $menu['4']['name']; ?></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?=$menu['5']['url']?>"><?php echo $menu['5']['name']; ?></a>
              </li>
            </ul>
            <ul  class="navbar-nav ">
              <li>
                <a href="/user/login"><?php if($lang=='ru') echo "Вход"; else echo "Kirish "; ?></a> / <a href="/user"><?php if($lang=='ru') echo "Регистрация"; else echo "Registratsiya "; ?></a>
              </li>
            </ul>
            
          </div>
          &nbsp;
           <form action="/uz" method="post" style="float: left;">
                  <button class="btn btn-outline-primary rounded-circle" name="uz">uz</button>                  
                </form> 
                &nbsp;
          <form action="/ru" method="post" style="float: left;margin-right: 5px">
                  <button class="btn btn-outline-primary rounded-circle" name="ru">ru</button>                  
                </form>
               
         
        </div>
      </nav>
    </header>