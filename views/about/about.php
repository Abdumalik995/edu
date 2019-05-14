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
              <?php foreach ($aboutmore as $about) { ?>
              <div class="col-md-12 col-lg-12 mb-5">
                <div class="block-20 ">
                  <figure style="padding: 10px;">
                    <a href=""><img src="/../template/images/<?=$about['img']?>" alt="" class="img-fluid" style="width: 100%; height: 300px;"></a>
                  </figure>
                  <div class="text">
                    <h3 class="heading"><a href=""><?=$about['name']?></a></h3>
                    <p><?=$about['text']?></p>
                    <div class="meta">
                      <div><span class="ion-android-calendar"> <?=$about['datee']?></span></div>
                      <!-- <div><span class="ion-android-person"></span></div> -->
                      <div><span class="fa fa-eye"> <?=$about['keyss']?></span></div>
                    </div>
                  </div>
                </div>
              </div>

             <?php } ?>
              </div>
            
          </div>
          <!-- END content -->
          <div class="col-md-6 col-lg-4 order-md-1">

            <div class="block-24 mb-5">
              <h3 class="heading">Sahifalar</h3>
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
                      <img src="/../template/images/img_2_b.jpg" alt="" class="img-fluid">
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
                      <img src="/../template/images/img_2_b.jpg" alt="" class="img-fluid">
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
                      <img src="/../template/images/img_2_b.jpg" alt="" class="img-fluid">
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
  <h3 class="heading">Tags</h3>
  <ul>
    <?php foreach ($aboutmore as $about){?>
    <li><a href="#"> <?=$about['tegs']?></a></li>
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
    

