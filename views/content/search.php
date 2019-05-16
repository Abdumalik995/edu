<?php include(ROOT.'/views/blogs/header.php'); 

              ?>
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          
          <div class="col-md-6 col-lg-8 order-md-2">
            <div class="row">
          <?php 
if($kalit == true){?>
  <div class="col-md-12 pt-5">Qidiruv 
  <strong class="text-primary heading"><?=$key ?> </strong>kalit so'zi bo'yicha natijalar:</div>
<?php foreach($kalit as $ruyxat){?>
          <div class="col-md-12 col-lg-6 mb-5">
                <div class="block-20 ">
                  <figure>
                    <a href="#"><img src="/template/images/<?php echo $ruyxat['img'] ?>" alt="" class="img-fluid"></a>
                  </figure>
                  <div class="text">
                    <h3 class="heading"><a href="/news/<?php echo $ruyxat['id'] ?>"><?php echo $ruyxat['name'] ?></a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="ion-android-calendar"></span><?php echo $ruyxat['date_added'] ?></a></div>
                      <div><a href="#"><span class="ion-android-person"></span><?php echo $ruyxat['author'] ?></a></div>
                      <div><a href="#"><span class="ion-chatbubble"></span> <?php echo $ruyxat['keyss'] ?></a></div>
                    </div>
                  </div>
                </div>
              </div><?php } ?>
      <?  }
        else {?>
          <div class="col-md-12 pt-5">Afsus, 
          <strong class="text-primary heading"><?=$key ?> </strong>kalit so'zi bo'yicha natijalar topilmadi</div>
            <?  }              
        ?>
             
            </div>
   
            <div class="row mb-5">
              <div class="col-md-12 text-center">
                         </div>
            </div>
          </div>
          <!-- END content -->
          <div class="col-md-6 col-lg-4 order-md-1">

            <div class="block-24 mb-5">
              <h3 class="heading">Categories</h3>
              <ul>
                <li><a href="#">Laravel <span>10</span></a></li>
                <li><a href="#">PHP <span>43</span></a></li>
                <li><a href="#">JavaScript <span>21</span></a></li>
                <li><a href="#">Python <span>65</span></a></li>
                <li><a href="#">iOS <span>34</span></a></li>
                <li><a href="#">Android <span>45</span></a></li>
                <li><a href="#">Swift <span>22</span></a></li>
              </ul>
            </div>

            <div class="block-25 mb-5">
              <div class="heading">Recent Courses</div>
              <ul>
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      <img src="template/images/img_2_b.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <h3 class="heading">Create cool websites using this template</h3>
                      <span class="meta">$34</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      <img src="template/images/img_2_b.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <h3 class="heading">Create cool websites using this template</h3>
                      <span class="meta">$34</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      <img src="template/images/img_2_b.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <h3 class="heading">Create cool websites using this template</h3>
                      <span class="meta">$34</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div class="block-26">
            
              <h3 class="heading">Taglar</h3>
              <ul>
                <?php foreach($teg_soni AS $teglar) { ?>
                <li><a href="/search/<?php echo $teglar['tegs'] ?>"><?php echo $teglar['tegs'] ?></a></li>
               <?php } ?>
              </ul>
            </div>


          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>
    <?php require_once('views/blogs/footer.php');   ?>