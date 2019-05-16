<?php

 if (isset($_POST['uz'])) {
    $_SESSION['lang'] = 'uz';
    
  } else {
    $_SESSION['lang'] = 'ru';
  } 
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
          <a class="navbar-brand absolute" href="index.html"><?php 
            if ($_SESSION['lang'] == 'uz') {
                    echo 'UNIVERSITY';
                } else {
                   echo 'УНИВЕРСИТЕТ'; 
                }
           ?></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav absolute-left">
              <li><form action="ru" method="post" style="float: left;margin-right: 5px">
                  <button class="btn btn-outline-primary" name="ru">ru</button>                  
                </form>
                <form action="uz" method="post" style="float: left;">
                  <button class="btn btn-outline-primary" name="uz">uz</button>                  
                </form>
              </li>
              <!-- <li>
                <a href="ru">ru</a>
              </li>
              <li>
                <a href="uz">uz</a>
              </li> -->
            </ul>
            <ul class="navbar-nav mx-auto">
             
             <!--<li class="nav-item">
                <a class="nav-link active" href="index.html">Asosiy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.html">Yangiliklar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Muallif haqida</a>
              </li> -->
           <?php foreach ($menu_asosiy as $menyu1) {
            $isDropdown=count($menyu1['sub_menu']) ;?>
            
              <li class="nav-item <?php echo $isDropdown?'dropdown':''?>">
                <a class="nav-link <?php echo $isDropdown?'dropdown-toggle':''?>" href="<?=$menyu1['adress'] ?>" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $menyu1['name'] ?>
                    
                  </a> 
                  <?php if($isDropdown) { ?>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <?php foreach ($menyu1['sub_menu'] as $pastki_menu) { ?>
                    <a class="dropdown-item" href="<?=$pastki_menu['adress'] ?>">
                      <?= $pastki_menu['name']?></a>
                    <?php } ?>

                  </div>
                <?php } ?>
              </li>
            <?php } ?>
                <li><a href="http://edu/news">Log</a></li>
             
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="login.html">Log</a> / <a href="register.html">Reg</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>