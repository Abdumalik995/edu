   <?php 
    include_once(ROOT.'/views/blogs/header.php');
    //include_once('/../blogs/header.php');

    ?> 
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(/../template/images/pex.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2 text-dark">News Blog</h1>
              <p class="bcrumb"><a href="/">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">News Blog</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-lg-8 order-md-2">
            <div class="row">
              <?php foreach ($news as $new) { ?>
                <div class="col-md-12 col-lg-6 mb-5">
                  <div class="block-20 ">
                    <figure>
                      <a href="/news/view/<?php echo $new['id']?>"><img src="/../template/images/<?=$new['img']?>" alt="" class="img-fluid" style="width:290px; height:200px"></a>
                    </figure>
                    <div class="text">
                      <h3 class="heading"><a href="/news/view/<?=$new['id']?>"><?=$new['name']?></a></h3>
                      <div class="meta">
                        <div><a href="#"><span class="ion-android-calendar"></span> <?=$new['date_added']?></a></div>
                        <div><a href="#"><span class="ion-android-person"></span> <?=ucfirst($new['author'])?></a></div>
                        <div><a href="#"><span class="fa fa-eye"></span> <?=$new['keyss']?></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>  


            <div class="row mb-5">
              <div class="col-md-12 text-center">
                <div class="block-27">
                  <ul>
                    <?php echo $pagination->get(); ?>
                    <!-- <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&gt;</a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- END content -->
          <div class="col-md-6 col-lg-4 order-md-1">

            <?php
              if ($_SESSION['lang'] == 'uz') { ?>
                  <div class="block-24 mb-5">
                    <h3 class="heading">Tezkor sahifalar</h3>
                    <ul>
                      <li><a href="#"><i class="fa fa-graduation-cap"></i>  Fakultetlar</a></li>
                      <li><a href="#"><i class="fa fa-"></i>  Kafedralar</a></li>
                      <li><a href="#"><i class="fa fa-"></i>  Markaz va bo`limlar</a></li>
                      <li><a href="#"><i class="fa fa-"></i>  Filiallar</a></li>
                      <li><a href="#"><i class="fas fa-user-graduate"></i>Talabalarga</a></li>
                      <li><a href="#"><i class="fa fa-"></i>  Abiturentlarga</a></li>
                      <li><a href="#"><i class="fa fa-picture-o"></i>  Fotogalereya</a></li>
                    </ul>
                </div>
              <?php } else { ?>
                      <div class="block-24 mb-5">
                        <h3 class="heading"></h3>
                        <ul>
                          <li><a href="#"><i class="fa fa-graduation-cap"></i>  Факультеты</a></li>
                          <li><a href="#"><i class="fa fa-"></i>  отдел</a></li>
                          <li><a href="#"><i class="fa fa-"></i>  центры </a></li>
                          <li><a href="#"><i class="fa fa-"></i>  филиалы</a></li>
                          <li><a href="#"><i class="fas fa-user-graduate">Студентам</i></a></li>
                          <li><a href="#"><i class="fa fa-"></i>  Абитурентам</a></li>
                          <li><a href="#"><i class="fa fa-picture-o"></i>  Фотогалерея</a></li>
                        </ul>
                      </div>
               
             <?php } ?>

            <div class="block-26">
              <h3 class="heading">Tags</h3>
              <ul>
                <?php foreach($teglar as $teg) { ?>
                <li><a href="#"><?php echo $teg['tegs']; ?></a></li>
                <?php } ?>
                <!-- <li><a href="#">design</a></li>
                <li><a href="#">typography</a></li>
                <li><a href="#">development</a></li>
                <li><a href="#">creative</a></li>
                <li><a href="#">codehack</a></li> -->
              </ul>
            </div>


          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>

  
<?php 
    include_once('/../blogs/footer.php');
 ?>