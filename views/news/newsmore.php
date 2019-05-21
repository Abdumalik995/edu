<?php 
    include_once(ROOT.'/views/blogs/header.php');

?>
    <!-- END header -->


    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-lg-8 order-md-2">
            <div class="row">
              <?php foreach ($newsmore as $new) { ?>
              <div class="col-md-12 col-lg-12 mb-5">
                <div class="block-20 ">
                  <figure style="padding: 10px;">
                    <a href=""><img src="/../template/images/<?=$new['img']?>" alt="" class="img-fluid" style="width: 100%; height: 450px;"></a>
                  </figure>
                  <div class="text">
                    <h3 class="heading"><a href=""><?=$new['name']?></a></h3>
                    <p><?=$new['text']?></p>
                    <div class="meta">
                      <div><span class="ion-android-calendar"> <?=$new['date_added']?></span></div>
                      <div><span class="ion-android-person"> <?=$new['author']?></span></div>
                      <div><span class="fa fa-eye"> <?=$new['keyss']?></span></div>
                    </div>
                  </div>
                </div>
              </div>

             <?php } ?>
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
    <?php foreach ($newsmore as $new){?>
    <li><a href="#"> <?=$new['tegs']?></a></li>
    <?php } ?>
  </ul>

</div>

          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>

    <?php 
    include_once(ROOT.'/views/blogs/footer.php');
 ?>
    

