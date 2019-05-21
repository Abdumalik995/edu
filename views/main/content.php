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
              
              <div class="col-md-12 col-lg-12 mb-5">
                
                <div class="block-20 ">
                  <?php if(isset($info['list'])){ ?>
                  <h1 style="font-size: 30px; margin-left: 15px;"><?=$info['name']?></h1>
                  <a href="<?=$menu['0']['url']?>" style="margin-left: 15px;">Universitet</a>-><a href=""><?=$info['name']?></a>

                  <div class="text" style="padding-top: 0">
                    
                    <ul style="padding-left: 18px; margin: 0">
                      <?php foreach ($info['list'] as $value) { ?>
                      <a href=""><li style="color: black"><?=$value?></li></a>
                    </ul>
                        <?php } ?>
                  </div>
                <?php } else{ ?>
                <h1 style="font-size: 30px; margin-left: 15px;"><?=$info['name']?></h1>
                  <a href="<?=$menu['0']['url']?>" style="margin-left: 15px;">Universitet</a>-><a href=""><?=$info['name']?></a>
                  <img src="/../template/images/<?=$info['img']?>" alt="" class="img-fluid" style="width: 710px; height: 350px; margin:10px;">
                  <div class="text" style="padding-top: 0">
                    <h3 class="heading"><?=$info['anons']?></h3>
                    <p><?=$info['text']?></p>
                   
    
                  </div>
                <?php } ?>
                </div>
              </div>

             
              </div>
            
          </div>
          <!-- END content -->
          <div class="col-md-6 col-lg-4 order-md-1">

            <div class="block-24 mb-5">
              <h3 class="heading"><?=$menu['0']['name']?></h3>
              <ul>
                <?php foreach ($dropdown1 as $minmenu){if($minmenu['nav_id']==$menu['0']['id']) {?>
                <li><a href="http:/content/<?=$minmenu['id']?>"><?php echo $minmenu['name'] ?></a></li>
              <?php }} ?>
              </ul>
            </div>

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



          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>

    <?php 
    include_once(ROOT.'/views/blogs/footer.php');
 ?>
    

