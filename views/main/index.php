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
                <h2 class="heading text-center mb-4 font-weight-bold"><?php echo WEBNAME ?></h2>
                <form action="" method="post" class="d-block d-lg-flex mb-4">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third"><input type="text" class="form-control" placeholder="Keyword search..."></div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Category Course</option>
                        <option value="">Laravel</option>
                        <option value="">PHP</option>
                        <option value="">JavaScript</option>
                        <option value="">Python</option>
                      </select>
                    </div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Difficulty</option>
                        <option value="">Beginner</option>
                        <option value="">Intermediate</option>
                        <option value="">Advance</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Search">  
                </form>                
              </div>
            </div>
            
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
                <h2><?=$welcome_main['name']; ?></h2>
              </div>
              <div class="text mb-5">
              <p><?=$welcome_main['anons']; ?></p>
              </div>
              <p><a href="#" class="btn btn-primary reverse py-2 px-4">Batafsil</a></p>
              
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
            <h2 class="text-primary heading"> So'nggi Yangiliklar</h2>
            
          </div>
        </div>
        <div class="row element-animate">
          
          <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">

            <div class="block-20 ">
              <figure>
                <a href="#"><img src="/../template/images/<?=$max_news['img']?>" alt="" class="img-fluid" style="width:100%;height:440px"></a>
              </figure>
              <div class="text">
                <h3 class="heading"><a href="#"><?=$max_news['name']?></a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span><?=$max_news['date_added']?></a></div>
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
                       <a href="#"><img src="/../template/images/<?=$newss['img']?>" alt="" class="img-fluid"></a>
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
    <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row">
            <?php foreach ($news as $new) { ?>
                <div class="col-md-6 col-lg-3">
                    <div class="media block-6 d-block">
                        <div class="icon mb-3"><span class="flaticon-book"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Knowledge is power</h3>
                            <p><?php echo $new['name'] ?></p>
                            <p><a href="#" class="more">Batafsil <span class="ion-arrow-right-c"></span></a></p>
                        </div>
                    </div> 
                </div> 
            <?php } ?>
          
          
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light element-animate" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure><img src="/../template/images/for.jpg" alt="Image placeholder" class="img-fluid"></figure>
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
                    <span>Talabalar</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="<?php echo $seos['0']['short_b'] ?>">0</strong>
                    <span>Universitetlar</span>
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
                    <span>Maktablar</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-mortarboard"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="<?php echo $seos['0']['short_teacher'] ?>">0</strong>
                    <span>O`qituvchilar</span>
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
            <h2 class="text-primary heading">Popular Courses</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
            <p><a href="#" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Enroll Now</a></p>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate">
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="/../template/images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="/../template/images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="/../template/images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>1,903/3,000</span>
                  </div>
                  <div class="price text-right"><span>$10.99</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="/../template/images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Design &amp; Develop</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>23/100</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="/../template/images/img_1.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="/../template/images/img_3.jpg" alt="Image" class="img-fluid">
                </figure>
                <div class="text">
                  <h2 class="heading"><a href="#">Advanced JavaScript Learning</a></h2>
                  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                      <span>2,219/6,000</span>
                    </div>
                    <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="/../template/images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Introduction to CSS</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>1,903/3,000</span>
                  </div>
                  <div class="price text-right"><span>$10.99</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <figure>
                <img src="/../template/images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="text">
                <h2 class="heading"><a href="#">Design &amp; Develop</a></h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                    <span>23/100</span>
                  </div>
                  <div class="price text-right"><del class="mr-3">$23</del><span>Free</span></div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      
    </div>
    <!-- END section -->


    <div class="container site-section element-animate">
      <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Teachers</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
          </div>
        </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(/../template/images/person_3.jpg);">
                <div class="box">
                  <h2>Job Smith</h2>
                  <p>Laravel Expert</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="/../template/images/person_3.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Job Smith <span class="position">Laravel Expert</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2 ">
            <div class="flipper">
              <div class="front" style="background-image: url(/../template/images/person_1.jpg);">
                <div class="box">
                  <h2>Mellissa Cruz</h2>
                  <p>JavaScript Guru</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="/../template/images/person_1.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Mellissa Cruz <span class="position">JavaScript Guru</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(/../template/images/person_2.jpg);">
                <div class="box">
                  <h2>Aldin Powell</h2>
                  <p>WordPress Ninja</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="/../template/images/person_2.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Aldin Powell <span class="position">WordPress Ninja</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>
      </div>
    </div>
    <!-- END .block-2 -->


    
<?php 
    include_once('/../blogs/footer.php');
 ?>