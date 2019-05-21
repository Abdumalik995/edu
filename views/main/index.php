<?php 
    //include_once(ROOT.'/views/blogs/header.php');
    include_once('/../blogs/header.php');

 ?>   
   <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(/../template/images/tuit.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">
  
            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4 font-weight-bold"><?php 
                if ($_SESSION['lang'] == 'uz') {
                    echo WEBNAME;
                } else {
                   echo WEBIMYA; 
                }?></h2>

                 
                <form action="search" method="post" class="d-block d-lg-flex mb-4">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third">
                        <input type="text" class="form-control" name="key" placeholder="Keyword search..."></div>
                    
                        <input type="submit" name="submit" class="search-submit btn btn-primary position-absolute" value="Search" style="right:0">  
                </form>  

              </div>
            </div>
            <p class="text-center"><a href="user/login" class="btn py-3 px-5">Avtorizatsiya</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="/../template/images/kt.jpg" alt="Image placeholder" class="" style="width:100%;height:100">
                <a href="/../template/images/uploads/tatu.mp4" class="play-button popup-vimeo"><span class="ion-ios-play"></span></a>

                <!-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> -->

              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2><?=$welcome_main['name_'.$_SESSION['lang']]; ?></h2>
              </div>
              <div class="text mb-5">
              <p><?=$welcome_main['anons_'.$_SESSION['lang']]; ?></p>
              </div>
              <p><a href="/content/<?php echo $welcome_main['id']?>" class="btn btn-primary reverse py-2 px-4">
              <?php 
                if ($_SESSION['lang'] == 'uz') {
                    echo 'Batafsil';
                } else {
                   echo 'Узнать больше'; 
                }
               ?></a></p>
              
            </div>

          </div>
          
        </div>

      </div>
    </section>
    <!-- END section -->
    <!-- str section -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading"> <?php 
                if ($_SESSION['lang'] == 'uz') {
                    echo 'So`nggi Yangiliklar';
                } else {
                   echo 'Последние новости'; 
                }
             ?></h2>
            
          </div>
        </div>
        <div class="row element-animate">
          
          <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">

            <div class="block-20 ">
              <figure>
                <a href="news/view/<?php echo $max_news['id']?>"><img src="/../template/images/<?=$max_news['img']?>" alt="" class="img-fluid" style="width:100%;height:440px"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="news/view/<?php echo $max_news['id']?>"><?=$max_news['name']?></a></h3>
                <div class="meta">
                  <div><a href="news/view/<?php echo $max_news['id']?>"><span class="ion-android-calendar"></span><?=$max_news['date_added']?></a></div>
                  <div><a href="#"><span class="ion-android-person"></span> <?=$max_news['author']?></a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> <?=$max_news['keyss']?></a></div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-12 col-lg-6">
            <?php foreach ($news_block as $newss) { ?>
                <div class="block-21 d-flex mb-4">
                    <figure class="mr-3">
                       <a href="news/view/<?php echo $newss['id']?>"><img src="/../template/images/<?=$newss['img']?>" alt="" class="img-fluid"></a>
                    </figure>
                    <div class="text">
                        <h3 class="heading"><a href="#"><?php echo $newss['name'] ?></a></h3>
                        <div class="meta">
                            <div><a href="#"><span class="ion-android-calendar"></span> <?=$newss['date_added']?></a></div>
                            <div><a href="#"><span class="ion-android-person"></span> <?=ucfirst($newss['author'])?></a></div>
                            <div><a href="#"><span class="ion-chatbubble"></span> <?=$newss['keyss']?></a></div>
                        </div>
                    </div>
                </div>
           <?php } ?>
              

             

          </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    
    <!-- END section -->

    <section class="site-section bg-light element-animate" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure><img src="/../template/images/as.jpg" alt="Image placeholder" class="img-fluid"></figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="heading">
                <h2><?php echo $seos['0']['name']; ?></h2>
              </div>
              <div class="text mb-5">
                <p><?php echo $seos['0']['title']; ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-student"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="<?php echo $seos['0']['short_s'] ?>">0</strong>
                    <span>
                    <?php 
                        if ($_SESSION['lang'] == 'uz') {
                            echo 'Talabalar';
                        } else {
                            echo 'Cтуденты'; 
                        }
                     ?></span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="<?php echo $seos['0']['short_b'] ?>">0</strong>
                    <span>
                    <?php 
                        if ($_SESSION['lang'] == 'uz') {
                            echo 'Universitetlar';
                        } else {
                            echo 'Университеты'; 
                        }
                     ?>
                    </span>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="<?php echo $seos['0']['short_school'] ?>">0</strong>
                    <span>
                    <?php 
                        if ($_SESSION['lang'] == 'uz') {
                            echo 'Maktablar';
                        } else {
                            echo 'Школы'; 
                        }
                     ?>
                    </span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-mortarboard"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="<?php echo $seos['0']['short_teacher'] ?>">0</strong>
                    <span>
                    <?php 
                        if ($_SESSION['lang'] == 'uz') {
                            echo 'O`qituvchilar';
                        } else {
                            echo 'Учителей'; 
                        }
                     ?> 
                    </span>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
  <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">
                <?php 
                        if ($_SESSION['lang'] == 'uz') {
                            echo 'Tadbirlar';
                        } else {
                            echo 'Событии'; 
                        }
                     ?> 
            </h2>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
         
           <?php foreach ($events as $event){?> 
          <div class="item">
            <div class="block-19">
              <figure>
                <img src="/../template/images/<?=$event['img']?>" alt="Image" class="img-fluid" style="height: 250px">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="about/<?php echo $event['id']?>"><?=$event['name']?></a></h2>
                <p class="mb-4"><?=$event['anons']?></p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span><?=$event['datee']?></span>
                  </div>
                  <div class="price text-right"><a href="about/<?php echo $event['id']?>" class="btn btn-primary reverse py-2 px-4">
                    <?php 
                        if ($_SESSION['lang'] == 'uz') {
                            echo 'Batafsil';
                        } else {
                            echo 'Узнать больше'; 
                        }
                    ?>
                  </a></div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>

      
    </div>


    <div class="container site-section element-animate">
      <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">
                <?php 
                        if ($_SESSION['lang'] == 'uz') {
                            echo 'It sohasi mashxurlari';
                        } else {
                            echo 'Гении IТ индустрии'; 
                        }
                    ?>
            </h2>
            
          </div>
        </div>
      <div class="row">
       <?php foreach ($it as $iti) {?>
        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(/../template/images/<?=$iti['img']?>);">
                <div class="box">
                  <h2><?=$iti['people']?></h2>
                  <p><?=$iti['work']?></p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;<?=$iti['quote']?>&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="/../template/images/<?=$iti['img']?>" alt="">
                  </div>
                  <div class="name align-self-center"><?=$iti['people']?> <span class="position"><?=$iti['work']?></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>
        <?php } ?>
      </div>
    </div>
    <!-- END .block-2 -->
    <!-- END .block-2 -->


    
<?php 
    include_once('/../blogs/footer.php');
 ?>